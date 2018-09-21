$(document).ready(function () {
    $('.home-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true
    });


    $('.home-goods-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerMode: false,
                    slidesToShow: 3
                }
            },

            {
                breakpoint: 993,
                settings: {
                    centerMode: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    centerMode: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.home-works-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerMode: false,
                    slidesToShow: 3
                }
            },

            {
                breakpoint: 993,
                settings: {
                    centerMode: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    centerMode: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.home-blog-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerMode: false,
                    slidesToShow: 3
                }
            },

            {
                breakpoint: 993,
                settings: {
                    centerMode: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    centerMode: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.nav-new').click(function () {
        $('#nav-new').css("height", "auto");
        $('#nav-action').css("height", "0");
        $('#nav-popular').css("height", "0");
    });

    $('.nav-action').click(function () {
        $('#nav-action').css("height", "auto");
        $('#nav-new').css("height", "0");
        $('#nav-popular').css("height", "0");
    });

    $('.nav-popular').click(function () {
        $('#nav-popular').css("height", "auto");
        $('#nav-new').css("height", "0");
        $('#nav-action').css("height", "0");

    });
});