// -------------------------------------
// Grunt watch
// -------------------------------------

module.exports = {

  // ----- Watch tasks ----- //

  scss: {
    files: ['lib/scss/**/*.scss', 'dev/scss/**/*.scss'],
    tasks: ['sass:develop', 'autoprefixer:develop', 'ftpush:deploy']
  },
  js: {
    files: ['lib/js/**/*.js', 'dev/js/*.js'],
    tasks: ['concat:develop', 'ftpush:deploy']
  },
  php: {
    files: ['dev/php/templates/*.php', 'dev/php/includes/*.php'],
    tasks: [
      'newer:copy:php',
      'ftpush:deploy'
    ]
  },
  css: {
    files: ['dev/css/style.css'],
    tasks: ['copy:css', 'ftpush:deploy']
  },
  img: {
    files: ['dev/img/**/*'],
    tasks: ['newer:imagemin:all', 'ftpush:deploy']
  },

  // ----- Enable livereload ----- //

  livereload: {
    options: {
      livereload: true
    },
    files: ['deploy/**/*']
  }
};
