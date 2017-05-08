module.exports = function(grunt) {

	grunt.config('concat', {
		// Concatenate JS files and output scripts.js
		dist: {
			src: [
				/* 'js/dev_scripts.js',  // This specific file */
				'js/plugins/jquery-3.2.0.min.js',
				'js/plugins/jquery.fittext.js',
				'js/plugins/jquery.return-to-top.js',
				'js/plugins/jquery.random-bg-image.js',
				'js/plugins/jquery.slideshow.js',
				'js/plugins/jquery.smothscroll.js',
				'js/site_scripts.js',
			],
			dest: '../js/site-scripts.js',
		}
	});
	grunt.loadNpmTasks('grunt-contrib-concat');
};