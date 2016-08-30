module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
          dist: {
            options: {                      
              style: 'compressed'
            },
            files: {
              'assets/css/main.css' : 'assets/scss/style.scss'
            }
          }
        },

        watch: {

          options: {
            livereload: true,
            spawn: false
          }, 

          js: {
            files: ['assets/js/*.js'],
          },

          css: {
            files: ['assets/scss/*.scss'],
            tasks: ['sass'],
          }

        },

        sass: {
          options: {                      
              // outputStyle: 'compressed',
              sourceMap: true,
          },
          dist: {
            files: {
              'assets/css/main.css' : 'assets/scss/style.scss',
            }
          }
        },

    });

  
    grunt.registerTask('default', ['watch']);

};