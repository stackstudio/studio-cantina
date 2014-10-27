'use strict';
module.exports = function(grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        // watch for changes and trigger sass, jshint, uglify and livereload
        watch: {
            sass: {
                files: ['public/scss/*.{scss,sass}'],
                tasks: ['sass', 'autoprefixer', 'cssmin']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            },
            livereload: {
                options: { livereload: true },
                files: ['css/style.css', 'public/js/*.js', 'public/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },

        // sass
        sass: {
            dist: {
                options: {
                    style: 'expanded',
                },
                files: {
                    'public/css/build/style.css': 'public/scss/style.scss'
                }
            }
        },

        // autoprefixer
        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 11', 'ie 10', 'ie 9', 'ios 6', 'ios 7', 'android 4'],
                map: true
            },
            files: {
                expand: true,
                flatten: true,
                src: 'public/css/build/*.css',
                dest: 'public/css/build'
            },
        },

        // css minify
        cssmin: {
            options: {
                keepSpecialComments: 1
            },
            minify: {
                expand: true,
                cwd: 'public/css/build',
                src: ['*.css', '!*.min.css'],
                ext: '.css'
            }
        },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'assets/js/source/**/*.js'
            ]
        },

        // uglify to concat, minify, and make source maps
        uglify: {
            plugins: {
                options: {
                    sourceMap: 'public/js/plugins.js.map',
                    sourceMappingURL: 'plugins.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'public/js/plugins.min.js': [
                        'public/js/source/plugins.js',
                    ]
                }
            },
            main: {
                options: {
                    sourceMap: 'public/js/main.js.map',
                    sourceMappingURL: 'main.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'public/js/main.min.js': [
                        'public/js/source/main.js'
                    ]
                }
            }
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true,
                    interlaced: true
                },
                files: [{
                    expand: true,
                    cwd: 'public/images',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'public/images'
                }]
            }
        },
        webfont: {
          icons: {
            src: 'public/icons/*.svg',
            dest: 'public/css/fonts',
            destCss: 'public/css/scss',
            options: {
                stylesheet: 'scss',
              font: 'studio-c'
            }
          }
        },
    });

    // register task
    grunt.registerTask('default', ['sass', 'webfont', 'autoprefixer', 'cssmin', 'uglify', 'watch']);

};
