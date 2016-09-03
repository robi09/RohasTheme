module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
          dist: {
            options: {                      
              outputStyle: 'compressed',
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

        makepot: {
          target: {
              options: {
                  cwd: '',                          // Directory of files to internationalize.
                  domainPath: '/languages',                   // Where to save the POT file.
                  exclude: [],                      // List of files or directories to ignore.
                  include: [],                      // List of files or directories to include.
                  mainFile: '',                     // Main project file.
                  potComments: '',                  // The copyright at the beginning of the POT file.
                  potFilename: 'rohas-lite.pot',                  // Name of the POT file.
                  potHeaders: {
                      poedit: true,                 // Includes common Poedit headers.
                      'x-poedit-keywordslist': true // Include a list of all possible gettext functions.
                  },                                // Headers to add to the generated POT file.
                  processPot: null,                 // A callback function for manipulating the POT file.
                  type: 'wp-theme',                // Type of project (wp-plugin or wp-theme).
                  updateTimestamp: true,            // Whether the POT-Creation-Date should be updated without other changes.
                  updatePoFiles: true              // Whether to update PO files in the same directory as the POT file.
              }
          }
      }


    });

  
    grunt.registerTask('default', ['watch']);

};