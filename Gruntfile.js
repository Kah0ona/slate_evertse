// *************************************
//
//   Gruntfile
//   -> Grunt's main configuration
//
// *************************************

module.exports = function (grunt) {

  // -------------------------------------
  // Load all grunt tasks from util/grunt
  // -------------------------------------

  require('load-grunt-config')(grunt, {
    configPath: process.cwd() + '/util/grunt'
  });

  // -------------------------------------
  // Register the grunt tasks
  // -------------------------------------

  // ----- Grunt init ----- //

  grunt.registerTask('init', 'Initialize the development environment.', [
    'attention:ftppass',
    'prompt:init',
    'copy:init',
    'mkdir:init',
    'exec:bower',
    'copy:bower'
  ]);

  // ----- Grunt develop ----- //

  grunt.registerTask('develop', 'Build child theme, watch for changes and process them.', [
    'watch'
  ]);

  // ----- Grunt build ----- //

  grunt.registerTask('build', 'Build child or parent files for deployment.', function(type) {
    if (type == null) {
      grunt.warn('Build type must be specified, like build:child or build:parent.');
    }
    if (type === 'child') {
      grunt.warn('This will run build:child.');
      // grunt.task.run('foo:' + n, 'bar:' + n, 'baz:' + n);
    }
    if (type === 'parent') {
      grunt.warn('This will run build:parent.');
      // grunt.task.run('foo:' + n, 'bar:' + n, 'baz:' + n);
    }
  });

  // ----- Grunt deploy ----- //

  grunt.registerTask('deploy', 'Deploy built child or parent files to live server.', function(type) {
    if (type == null) {
      grunt.warn('Deploy type must be specified, like deploy:child or deploy:parent.');
    }
    if (type === 'child') {
      grunt.warn('This will run deploy:child.');
      // grunt.task.run('foo:' + n, 'bar:' + n, 'baz:' + n);
    }
    if (type === 'parent') {
      grunt.warn('This will run deploy:parent.');
      // grunt.task.run('foo:' + n, 'bar:' + n, 'baz:' + n);
    }
  });

};
