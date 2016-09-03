module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
          dist: {
            options: {                      
              outputStyle: 'compact',
              sourceMap: false
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



    });

  
    grunt.registerTask('default', ['watch']);

};