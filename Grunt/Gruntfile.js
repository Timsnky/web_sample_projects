module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            js: {
                src: [
                    'js/file1.js',
                    'js/file2.js'
                ],
                dest:
                    'js/build/main.js'

            }
        },

        uglify: {
            js: {
                src: 'js/build/main.js',
                dest: 'js/build/main.min.js'
            }
        },

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'img/',
                    src: [ '*.jpg'],
                    dest: 'img/build/'

                }]
            }
        },

        watch: {
            scripts: {
                files: ['js/*.js', 'css/*.scss'],
                tasks: ['concat','uglify','imagemin','sass'],
                options: {
                    spawn: false,
                },
            }
        },

        sass: {
            css: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/build/styles.css': 'css/source.scss'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', ['watch']);
}