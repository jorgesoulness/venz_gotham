(function ($) {
    var initHero = function ($scope) {
        var hero = $scope.find('.vs-hero-carousel');
        if (!hero.length) {
            return;
        }
        hero.layerSlider({
            allowRestartOnResize: true,
            type: 'responsive',
            height: hero.data('height'),
            layersContainer: hero.data('container'),
            skinsPath: 'layerslider/skins/'
        });
    };
    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction(
            'frontend/element_ready/gt-hero.default',
            initHero
        );
    });
})(jQuery);