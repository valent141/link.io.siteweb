$(document).ready(function() {
    nav = $('nav');

    $(window).on('scroll', function() {
        if($(window).scrollTop() > 0)
            nav.addClass('scrolled');
        else
            nav.removeClass('scrolled');
    });
});