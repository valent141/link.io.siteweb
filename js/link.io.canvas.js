function LinkIOCanvas(canvas, roomID, color, window, name) {
    this.can = canvas;
    this.name = name;
    this.window = window;
    this.ctx = this.can[0].getContext("2d");
    this.roomID = roomID;
    this.socket = undefined;
    this.mouseDown = false;
    this.lastEvent = undefined;
    this.waitLineTime = 10;
    this.lastLineTime = 0;
    this.color = color;
    this.linkIOcnx = new __LinkIO();
}

LinkIOCanvas.prototype.start = function(ip) {
    var that = this;

    this.linkIOcnx.connect(ip, this.name);

    this.linkIOcnx.on("line", function(e) {
        that.drawLine(e.fromX, e.fromY, e.toX, e.toY, e.color);
    });

    this.linkIOcnx.on("clear", function(e) {
        that.ctx.beginPath();
        that.ctx.fillStyle = "white";
        that.ctx.fillRect(0, 0, that.can.width(), that.can.height());
    });

    this.linkIOcnx.joinRoom(this.roomID, function(id, users) {});

    this.can.mousedown(function(e) {
        that.lastEvent = e;
    }).mousemove(function(e) {
        that.mouseMove(e);
    });

    this.can[0].addEventListener("touchstart", function(e) {
        that.lastEvent = e;
    });
    this.can[0].addEventListener("touchmove", function(e) {
        that.mouseMove(e);
    });

    this.linkIOcnx.on("clear", function(e) {
        that.ctx.clearRect(0, 0,  that.can.width(), that.can.height());
    });
}

LinkIOCanvas.prototype.mouseMove = function(e) {
    var that = this;
    if (e.buttons == 1) {
        if(Date.now() - that.lastLineTime > that.waitLineTime) {
            that.linkIOcnx.emit("line", {
                fromX: (that.lastEvent.offsetX / that.can.width()) != 0 ? that.lastEvent.offsetX / that.can.width() : "0.0",
                fromY: (that.lastEvent.offsetY / that.can.height()) != 0 ? that.lastEvent.offsetY / that.can.height() : "0.0",
                toX: (e.offsetX / that.can.width()) != 0 ? e.offsetX / that.can.width() : "0.0",
                toY: (e.offsetY / that.can.height()) != 0 ? e.offsetY / that.can.height() : "0.0",
                color: that.color
            }, false);
            that.drawLine(that.lastEvent.offsetX / that.can.width(),
                that.lastEvent.offsetY/ that.can.height(),
                e.offsetX / that.can.width(),
                e.offsetY / that.can.height(),
                that.color);

            that.lastEvent = e;
            that.lastLineTime = Date.now();
        }
    }
}

LinkIOCanvas.prototype.clear = function(send) {
    this.ctx.clearRect(0, 0,  this.can.width(), this.can.height());

    if(send)
        this.linkIOcnx.emit("clear");
}

LinkIOCanvas.prototype.drawLine = function (x1, y1, x2, y2, color) {
    this.ctx.beginPath();
    this.ctx.moveTo(x1 * this.can.width(), y1 * this.can.height());
    this.ctx.lineTo(x2 * this.can.width(), y2 * this.can.height());
    this.ctx.lineWidth = 2;
    this.ctx.strokeStyle = color;
    this.ctx.stroke();
}