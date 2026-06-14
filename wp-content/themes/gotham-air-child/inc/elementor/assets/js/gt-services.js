(function ($) {
    function initServices($scope) {
        var mainSlider = $scope.find('.service-slider-one');
        var thumbSlider = $scope.find('.service-slider-two');
        if (!mainSlider.length || !thumbSlider.length) {
            return;
        }
        if (mainSlider.hasClass('slick-initialized')) {
            mainSlider.slick('unslick');
        }
        if (thumbSlider.hasClass('slick-initialized')) {
            thumbSlider.slick('unslick');
        }
        mainSlider.slick({
            arrows: false,
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: thumbSlider
        });
        thumbSlider.slick({
            dots: false,
            arrows: true,
            vertical: true,
            infinite: true,
            focusOnSelect: true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: mainSlider,
            prevArrow: '<button type="button" class="slick-prev"><i class="far fa-long-arrow-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="far fa-long-arrow-right"></i></button>',
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        vertical: false
                    }
                }
            ]
        });
    }
    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction(
            'frontend/element_ready/gt-services.default',
            initServices
        );
    });
})(jQuery);