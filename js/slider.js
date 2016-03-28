$(document).ready(function() {
    slidesWrapper = $('.cd-hero-slider');
    nav = $('nav');
    bottom = $('.bottom img');
    primaryNav = $('.cd-primary-nav');
    sliderNav = $('.cd-slider-nav');
    navigationMarker = $('.cd-marker');
    slidesNumber = slidesWrapper.children('li').length;
    visibleSlidePosition = 0;
    autoPlayId = "";
    autoPlayDelay = 5000;
    miniCurrent = 0;
    miniShow = 7;
    miniTotal = $('.miniSlider .wrapper > div').length;
    miniTranslate = 0;

    $(window).on('scroll', function() {
        /*if($(window).scrollTop() > 0)
         nav.addClass('scrolled');
         else
         nav.removeClass('scrolled');*/

        var opacity = 1 - $(window).scrollTop() / ($(window).height() * 0.8);
        if(opacity < 0)
            opacity = 0;
        bottom.css('opacity', opacity);
    });

    $('.miniSlider .next').click(function() {
        miniCurrent = miniCurrent + 1 + miniShow <= miniTotal ? miniCurrent + 1 : 0;
        miniTranslate = -(100 + 15 + 15) * miniCurrent;
        $('.miniSlider .wrapper').css({"transform":"translate(" + miniTranslate + "px,0)"});
    });

    $('.miniSlider .previous').click(function() {
        miniCurrent = miniCurrent == 0 ? miniTotal - miniShow : miniCurrent - 1;
        miniTranslate = -(100 + 15 + 15) * miniCurrent;
        $('.miniSlider .wrapper').css({"transform":"translate(" + miniTranslate + "px,0)"});
    });

    setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
    sliderNav.on('click', 'li', function(event){
        event.preventDefault();
        var selectedItem = $(this);
        if(!selectedItem.hasClass('selected')) {
            // if it's not already selected
            var selectedPosition = selectedItem.index(),
                activePosition = slidesWrapper.find('li.selected').index();

            if( activePosition < selectedPosition) {
                nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
            } else {
                prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
            }

            //this is used for the autoplay
            visibleSlidePosition = selectedPosition;

            updateSliderNavigation(sliderNav, selectedPosition);
            updateNavigationMarker(navigationMarker, selectedPosition+1);

            //reset autoplay
            setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
        }
    });
})

function nextSlide(visibleSlide, container, pagination, n){
    visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        visibleSlide.removeClass('is-moving');
    });

    container.children('li').eq(n).addClass('selected from-right').prevAll().addClass('move-left');
}

function prevSlide(visibleSlide, container, pagination, n){
    visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        visibleSlide.removeClass('is-moving');
    });

    container.children('li').eq(n).addClass('selected from-left').removeClass('move-left').nextAll().removeClass('move-left');
}

function updateSliderNavigation(pagination, n) {
    var navigationDot = pagination.find('.selected');
    navigationDot.removeClass('selected');
    pagination.find('li').eq(n).addClass('selected');
}

function setAutoplay(wrapper, length, delay) {
    if(wrapper.hasClass('autoplay')) {
        clearInterval(autoPlayId);
        autoPlayId = window.setInterval(function(){autoplaySlider(length)}, delay);
    }
}

function autoplaySlider(length) {
    if( visibleSlidePosition < length - 1) {
        nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition + 1);
        visibleSlidePosition +=1;
    } else {
        prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, 0);
        visibleSlidePosition = 0;
    }
    updateNavigationMarker(navigationMarker, visibleSlidePosition+1);
    updateSliderNavigation(sliderNav, visibleSlidePosition);
}

function updateNavigationMarker(marker, n) {
    removeClassPrefix(marker, 'item');
    marker.addClass('item-'+n);
}

function removeClassPrefix(m, prefix) {
    m.each(function(i, el) {
        var classes = el.className.split(" ").filter(function(c) {
            return c.lastIndexOf(prefix, 0) !== 0;
        });
        el.className = $.trim(classes.join(" "));
    });
    return this;
};