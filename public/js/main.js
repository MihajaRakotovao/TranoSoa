(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.nav').css('top', '0px');
        } else {
            $('.nav').css('top', '-100px');
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.search-form').css('left', '0px');
        } else {
            $('.search-form').css('left', '-100vh');
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.search-carousel').css('right', '0px');

        } else {
            $('.search-carousel').css('right', '-100vh');
        }
    });




    // info home
    var content = function () {
        setInterval(function () {
            if ($('.fond-content').length > 0) {
                $('.fond-content').css('right', '0%');
            }
        }, 500);
    };
    content();

    // image carousel
    const initSlider = () =>{
        const imageList = document.querySelector('.slider-wrapper .image-list ');
        const slideButtons = document.querySelectorAll('.slider-wrapper .slider-button ');

        slideButtons.forEach(button => {
            button.addEventListener('click',() => {
                const direction = button.id === "prev-slide" ? -1 : 1;
                const scrollAmount = imageList.clientWidth * direction;
                imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
            });
        });
    }

    window.addEventListener("load",initSlider);

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


})(jQuery);


