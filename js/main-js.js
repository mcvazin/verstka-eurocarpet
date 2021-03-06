$(document).ready(function () {

    var viewportHeight;
    var viewportWidth;
    if (document.compatMode === 'BackCompat') {
        viewportHeight = document.body.clientHeight;
        viewportWidth = document.body.clientWidth;
    } else {
        viewportHeight = document.documentElement.clientHeight;
        viewportWidth = document.documentElement.clientWidth;
    }

    if (viewportWidth > 575) {
        $('#pid-cat-filters').removeClass('collapse');
    }

    // установливаем обработчик события resize
    $(window).resize(function () {
        if (document.compatMode === 'BackCompat') {
            viewportHeight = document.body.clientHeight;
            viewportWidth = document.body.clientWidth;
        } else {
            viewportHeight = document.documentElement.clientHeight;
            viewportWidth = document.documentElement.clientWidth;
        }

        if (viewportWidth > 575) {
            $('#pid-cat-filters').removeClass('collapse');
        }
    });

// вызовем событие resize
    $(window).resize();

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

    $('.good-foto-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true
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

    $('.logo-row').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true,

        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    $('.page-works-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true,
    });


    $('.nav-new').click(function () {
        $('#nav-action').css("height", "0");
        $('#nav-popular').css("height", "0");
        $('#nav-new').css("height", "auto");

    });

    $('.nav-action').click(function () {
        $('#nav-new').css("height", "0");
        $('#nav-popular').css("height", "0");
        $('#nav-action').css("height", "auto");

    });

    $('.nav-popular').click(function () {
        $('#nav-new').css("height", "0");
        $('#nav-action').css("height", "0");
        $('#nav-popular').css("height", "auto");


    });

    function collision($div1, $div2) {
        var x1 = $div1.offset().left;
        var w1 = 40;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var w2 = 40;
        var r2 = x2 + w2;

        if (r1 < x2 || x1 > r2) return false;
        return true;

    }

    // // filter-price slider
    $('#slider').slider({
        range: true,
        min: 0,
        max: 50000,
        values: [0, 50000],
        slide: function (event, ui) {
            $('.min-price').val(ui.values[0]);
            $('.max-price').val(ui.values[1]);

            //

            if (ui.values[0] == ui.values[1]) {
                $('.price-range-both i').css('display', 'none');
            } else {
                $('.price-range-both i').css('display', 'inline');
            }

            //

            if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                $('.price-range-min, .price-range-max').css('opacity', '0');
                $('.price-range-both').css('display', 'block');
            } else {
                $('.price-range-min, .price-range-max').css('opacity', '1');
                $('.price-range-both').css('display', 'none');
            }

        }
    });


    $('.ui-slider-range').append('<span class="price-range-both value"></span>');

    $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value"></span>');
    $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value"></span>');

    $('.min-price').val($('#slider').slider('values', 0));
    $('.max-price').val($('#slider').slider('values', 1));

    //********* plus minus snippet for one snippet on page
    $('#qty_input').prop('disabled', true);
    $('#plus-btn').click(function () {
        $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
    });
    $('#minus-btn').click(function () {
        $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
        if ($('#qty_input').val() == 0) {
            $('#qty_input').val(1);
        }
    });

    //********* plus minus snippet for multi snippets
    var but_parent_id = '';
    $('.qty_input').prop('disabled', true);
    $('.plus-btn').click(function () {
        but_parent_id = '#' + $(this).parent().parent().attr('id');
        $(but_parent_id + ' .qty_input').val(parseInt($(but_parent_id + ' .qty_input').val()) + 1);
    });
    $('.minus-btn').click(function () {
        but_parent_id = '#' + $(this).parent().parent().attr('id');
        $(but_parent_id + ' .qty_input').val(parseInt($(but_parent_id + ' .qty_input').val()) - 1);
        if ($(but_parent_id + ' .qty_input').val() == 0) {
            $(but_parent_id + ' .qty_input').val(1);
        }
    });


    // replace SVG as inline   MUST vahe class "svg-hovered"
    $('img[src$=".svg"].svg-hovered').each(function () {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Remove any invalid XML tags
            $svg = $svg.removeAttr('xmlns:a');

            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function () {
                $svg.attr(this.name, this.value);
            });

            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml');
    });

    //script for personal office
    $('.personal-office__order-btn').click(function() {
        let findClass = $(this).next('.personal-office__order-title');
        let findArticle = $(this).next().next('.personal-office__order-desc');

        findClass.toggleClass('active');
        findArticle.slideToggle();

    });


    $('.edit').click(function(){
        $(this).prev('input').removeAttr('disabled')
    });

    $('.add-input').click(function(){
        $(this).parent().append( $('<input class="new-input" type="text" value="">') );
    });

    //spinner
    $('.spinner').each(function () {

        var spinner = $(this),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.up'),
            btnDown = spinner.find('.down'),
            // options
            step = input.data('step'),
            min = input.data('min'),
            max = input.data('max');

        input.val(min);

        btnUp.click(function () {
            input.val() >= max ? $(this).prop("disabled", true) : input.val((input.val() * 1) + step);

        });

        btnDown.click(function () {
            input.val() <= min ? $(this).prop("disabled", true) : input.val((input.val() * 1) - step);
        });

    });
});