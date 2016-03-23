$(document).ready(function() {
    $('.footer .year').html(new Date().getFullYear());

    $('nav.main li').click(function() {
        window.location = $(this).children('a').attr('href');
    });


    initTwins();
})


function initTwins() {
    var sessionID = generateRandomKey();
    var pc = new LinkIOCanvas($("#canvas_pc"), sessionID, "#3498db", window, "PC");
    var tablet = new LinkIOCanvas($("#canvas_tablet"), sessionID, "#2ecc71", window, "Tablet");

    tablet.start();
    pc.start();

    $(".twins .clear").click(function() {
        tablet.clear();
        pc.clear();
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