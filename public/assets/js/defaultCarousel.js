var rtlDirection = $('html').attr('dir') === 'rtl';
// ================================ Default Slider Start ================================
$('.default-carousel').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 600,
    rtl: rtlDirection
});

// Arrow Carousel
$('.arrow-carousel').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 600,
    prevArrow: '<button type="button" class="slick-prev"><iconify-icon icon="ic:outline-keyboard-arrow-left" class="menu-icon"></iconify-icon></button>',
    nextArrow: '<button type="button" class="slick-next"><iconify-icon icon="ic:outline-keyboard-arrow-right" class="menu-icon"></iconify-icon></button>',
    rtl: rtlDirection
});

// pagination carousel
$('.pagination-carousel').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 600,
    prevArrow: '<button type="button" class="slick-prev"><iconify-icon icon="ic:outline-keyboard-arrow-left" class="menu-icon"></iconify-icon></button>',
    nextArrow: '<button type="button" class="slick-next"><iconify-icon icon="ic:outline-keyboard-arrow-right" class="menu-icon"></iconify-icon></button>',
    rtl: rtlDirection
});

// multiple carousel
$('.multiple-carousel').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 600,
    gap: 24,
    prevArrow: '<button type="button" class="slick-prev"><iconify-icon icon="ic:outline-keyboard-arrow-left" class="menu-icon"></iconify-icon></button>',
    nextArrow: '<button type="button" class="slick-next"><iconify-icon icon="ic:outline-keyboard-arrow-right" class="menu-icon"></iconify-icon></button>',
    rtl: rtlDirection,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});

// carousel with progress bar
jQuery(document).ready(function ($) {
    var sliderTimer = 4000;
    var beforeEnd = 400;
    var $imageSlider = $('.progress-carousel');
    $imageSlider.slick({
        autoplay: true,
        autoplaySpeed: sliderTimer,
        speed: 1000,
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        rtl: rtlDirection
    });

    function progressBar() {
        $('.slider-progress').find('span').removeAttr('style');
        $('.slider-progress').find('span').removeClass('active');
        setTimeout(function () {
            $('.slider-progress').find('span').css('transition-duration', (sliderTimer / 1000) + 's').addClass('active');
        }, 100);
    }
    progressBar();
    $imageSlider.on('beforeChange', function (e, slick) {
        progressBar();
    });
    $imageSlider.on('afterChange', function (e, slick, nextSlide) {
        titleAnim(nextSlide);
    });

    // Title Animation JS
    function titleAnim(ele) {
        $imageSlider.find('.slick-current').find('h1').addClass('show');
        setTimeout(function () {
            $imageSlider.find('.slick-current').find('h1').removeClass('show');
        }, sliderTimer - beforeEnd);
    }
    titleAnim();
});
// ================================ Default Slider End ================================