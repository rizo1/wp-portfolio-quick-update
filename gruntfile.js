module.exports = function(grunt) {
		
	//configure tasks
	grunt.initConfig({
		
	
		
		pkg: grunt.file.readJSON('package.json'),

	
	copy: {
	
		main:{
		  
		  files: [

	//	    {
	//	   	nonull: true,
	//	   	expand: true,
	//	    flatten: true,
	//	    filter: 'isFile',
	//	    cwd: 'bower_components/jquery/dist/',
	//	    src: 'jquery.js', 
	//	   	dest: 'src/js/', 
	//	  },

	   {
		   	nonull: true,
		   	expand: true,
		    flatten: true,
		    filter: 'isFile',
		    cwd: 'bower_components/jquery.easing/js/',
		    src: 'jquery.easing.js', 
		   	dest: 'src/js/', 
		  },

		   {
		   	nonull: true,
		   	expand: true,
		    flatten: true,
		    filter: 'isFile',
		    cwd: 'bower_components/bootstrap/dist/js/',
		    src: 'bootstrap.js', 
		   	dest: 'src/js/', 
		  },
		  
		  {
		  	nonull: true,
		   	expand: true,
		    flatten: true,
		    filter: 'isFile',
		   cwd: 'bower_components/bootstrap/dist/css/', 
		   src: 'bootstrap.css',
		   dest: 'src/css/' 
		 	},
		 	{
		  	nonull: true,
		   	expand: true,
		    flatten: true,
		    filter: 'isFile',
		   cwd: 'bower_components/font-awesome/css/', 
		   src: 'font-awesome.css',
		   dest: 'src/css/' 
		 	},

		  ]
		
		 }
		},

	  //{ src: 'bower_components/bootstrap/dist/css/bootstrap.css' dest: 'src/css/' }
		
		cssmin : {
		   combine: {
		   		options: {
		            keepSpecialComments: 0
		        },
				files: {
				  'style.css': ['src/css/*.css']
				}  
			}
		},

		
		uglify: {
			build: {
				preserveComments: false,
				src: 'src/js/*.js',
				dest: 'js/script.min.js'
			}
		},

		//to be used using NEWLY GENERATED HTML FILES in the test folder
		//before deployment but only if new styles are added and new classes created
		//uncss: {
		

		 // dist: {
		 //   files: {
		 //    'style.css': ['src/uncss-test-files/*.html']
		 //  }
		 //}
		//},


		watch: {
			js: {
				files: ['src/js/*.js'],
				tasks: ['uglify']
			},
			css: {
				files: ['src/css/*.css'],
				tasks: ['cssmin']
			}	
		},
		
		 
	});
	
	//load the pluginsgrunt.loadNpmTasks();
	//grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');	
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	//grunt.loadNpmTasks('grunt-uncss');
	
	
	
	//register tasks 'autoprefixer:dev',
	grunt.registerTask('singleTest', ['cssmin']);
	grunt.registerTask('default', ['uglify:build','cssmin']);

	//run "bower update" to update dependencies and then "grunt copy" to move them to asset folder
	//autoprefixer broke animation on gears and smoothness of scrolling in about section
};