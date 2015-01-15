module.exports = function(grunt) {
  // Do grunt-related things in here

  grunt.initConfig({

  // Watch
    watch: {
      css: {
        files: 'assets/css/scss/*.scss',
        tasks: ['sass', 'autoprefixer'],
        options: {
          livereload: true,
        },
      },

      scripts: {
        files: ['assets/js/**/*.js'],
        tasks: ['uglify'],
        options: {
          spawn: false,
        },
      },

    },

  // CSS
    sass: {
      sassFront: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'assets/css/ssta.css': 'assets/css/scss/ssta.scss',
        }
      },
      sassAdmin: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'assets/css/ssta-admin.css': 'assets/css/scss/ssta-admin.scss',
        }
      },
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']
      },
      preFront: {
        src: 'assets/css/ssta.css',
        dest: 'assets/css/ssta.min.css'
      },
      preAdmin: {
        src: 'assets/css/ssta-admin.css',
        dest: 'assets/css/ssta-admin.min.css'
      },
    },

  // JS
    uglify: {
      my_target: {
        files: {
          'assets/js/ssta.min.js': ['assets/js/src/**/*.js'],
        }
      }
    },

  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-autoprefixer');
};