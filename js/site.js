$(document).ready(function() {
    $('.footer .year').html(new Date().getFullYear());

    $('nav.main li').click(function() {
        window.location = $(this).children('a').attr('href');
    });
})