(function ($) {
    function getHeroHeight(hero) {
        console.log('Widget hero: ' + hero);
        let height = hero.data('height') || 1080;
        if (window.innerWidth <= 767) {
            height = hero.data('height-mobile') || height;
        }
        else if (window.innerWidth <= 991) {
            height = hero.data('height-tablet') || height;
        }
        return height;
    }
    var initHero = function ($scope) {
        var hero = $scope.find('.vs-hero-carousel');
        if (!hero.length) {
            return;
        }
        hero.layerSlider({
            allowRestartOnResize: true,
            type: 'responsive',
            // height: hero.data('height'),
            height: getHeroHeight(hero),
            layersContainer: hero.data('container'),
            skinsPath: window.pathFiles+'layerslider/skins/'
        });
    };
    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction(
            'frontend/element_ready/gt-hero.default',
            initHero
        );
    });
})(jQuery);