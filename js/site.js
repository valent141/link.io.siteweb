var linkIO_serverIP = "localhost:8080";

$(document).ready(function() {
    nav = $('nav');

    $('.footer .year').html(new Date().getFullYear());

    $('nav.main li').click(function() {
        window.location = $(this).children('a').attr('href');
    });

    $(window).on('scroll', function() {
        if($(window).scrollTop() > 0)
            nav.addClass('scrolled');
        else
            nav.removeClass('scrolled');
    });

    window.addEventListener('resize', onResize, false);
    onResize();

    initTwins();
    initDemo();

});

function initDemo() {
    demo = new LinkIOCanvas($(".demo canvas"), "site_demo", "#3498db", window, generateRandomKey());

    $(".pencils img").not(".eraser").click(function() {
        $(".pencils img.active").removeClass("active");
        demo.color = $(this).attr("data-color");
        $(this).addClass("active");
    });

    $(".pencils .eraser").click(function() {
        demo.clear(true);
    });

    demo.start(linkIO_serverIP);
}

function onResize() {
    $("#canvas_demo").attr("height", $(".board").height());
    $("#canvas_demo").attr("width", $(".board").width());
}


function initTwins() {
    var sessionID = generateRandomKey();
    pc = new LinkIOCanvas($("#canvas_pc"), sessionID, "#3498db", window, "PC");
    tablet = new LinkIOCanvas($("#canvas_tablet"), sessionID, "#2ecc71", window, "Tablet");

    tablet.start(linkIO_serverIP);
    pc.start(linkIO_serverIP);

    $(".twins .clear").click(function() {
        tablet.clear(false);
        pc.clear(false);
    });

    $(".twins .btn-show").click(function() {
        $(".twins .pc").toggleClass("code");

        if($(".twins .pc").hasClass("code")) {
            $(this).html("cacher le code");
        }
        else {
            $(this).html("voir le code");
        }
    });
}




/**** TOOLS ****/
var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
function generateRandomKey() {
    var apiKey = "";

    for (var i = 0; i < 20; i++)
        apiKey += chars[Math.round(Math.random() * chars.length)];

    return apiKey;
}