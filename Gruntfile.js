var babel = require('rollup-plugin-babel');
var resolve = require('rollup-plugin-node-resolve');

module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		cssmin: {
			options: {
				shorthandCompacting: false,
				roundingPrecision: -1
			},
			dist: {
				files: {
					'assets/css/app-min.css': ['assets/css/app.css']
				}
			}
		},
		rollup: {
			options: {
				format: 'iife',
				plugins: function() {
					return [
						babel({
							exclude: './node_modules/**'
						})
					];
				}
			},
			dist: {
				files: {
					'assets/js/dist/bundle.js': ['assets/js/app.js']
				}
			}
		},
		sass: {
			dist: {
				files: {
					'assets/css/app.css': 'assets/sass/app.scss'
				}
			}
		},
		watch: {
			css: {
				files: './assets/**/*.scss',
				tasks: ['sass', 'cssmin']
			},
			js: {
				files: './assets/**/*.js',
				tasks: ['rollup']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-rollup');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default', ['watch']);
};
