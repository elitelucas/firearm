/**
 * Created by Andolsi on 11/11/2019.
 */
module.exports = function(grunt) {

    grunt.initConfig({
        cssmin: {
            options: {
                rebase: true,
                report: "min",
                sourceMap: false
            },
            target: {
                files: {
                    "build/default.min.css": [
                        'assets/css/icomoon.css',
                        'assets/css/bootstrap.min.css',
                        'assets/lib/css/nivo-slider.css',
                        'assets/css/jquery.fancybox.min.css',
                        'assets/css/core.css',
                        'assets/css/shortcode/shortcodes.css',
                        'assets/css/style3.css',
                        'assets/css/custom.css',
                        'assets/css/responsive.css'
                    ],
                    /*"build/carousel.min.css": [
                     'assets/css/animate.min.css',
                     'assets/css/ken_burns_effect_carousel.css'
                     ],*/
                    /*"build/slider.min.css": [
                     'assets/plugins/lightgallery/css/lightgallery.css',
                     'assets/plugins/swiper/css/swiper.css'
                     ],*/
                    /*"build/leaflet.min.css": [
                        'assets/plugins/leaflet/leaflet.css'
                    ],*/
                }
            }
        },

        uglify: {
            target: {
                files: {
                    /*"build/default.min.js": [
                        'assets/js/vendor/jquery-3.1.1.min.js',
                        'assets/js/jquery.easing.1.3.js',
                        'assets/js/vendor/jquery-ui.js',
                        'assets/js/jquery.cookie.js',
                        'assets/js/jquery.lazy.min.js',
                        'assets/js/bootstrap.min.js',
                        'assets/js/jquery.fancybox.min.js',
                        'assets/js/vendor/imagesloaded.pkgd.min.js',
                        'assets/js/vendor/TweenMax.min.js',
                        'assets/lib/js/jquery.nivo.slider.js',
                        'assets/js/validate.js',
                        'assets/js/jqBootstrapValidation.js',
                        'assets/js/contact_me.js',
                        'assets/js/plugins.js',
                    ],*/
                    /*"build/carousel.min.js": [
                        'assets/js/jquery.touchSwipe.min.js',
                        'assets/js/responsive_bootstrap_carousel.js',
                    ],*/
                    /*"build/slider.min.js": [
                     'assets/plugins/lightgallery/js/lightgallery.js',
                     'assets/plugins/swiper/js/swiper.js',
                     ],*/
                    /*"build/leaflet.min.js": [
                        'assets/plugins/leaflet/leaflet.js',
                    ],*/
                    /*"build/history.min.js": [
                     'assets/js/history.js'
                     ],*/
                    "build/script.min.js": [
                        'assets/js/main.js',
                    ],
                }
            }
        }

    });

    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-uglify");

    grunt.registerTask("build", ["cssmin", "uglify"]);
};