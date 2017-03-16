module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        sass: {                              // Nom de la tâche
            dist: {                            // Nom de la sous-tâche
                options: {                       // Options
                    style: 'compressed'
                },
                files: {                         // Liste des fichiers
                    'view/css/style.css': 'view/scss/style.scss'       // 'destination': 'source'
                }
            }
        },

        'ftp-deploy': {
          build: {
            auth: {
                host: 'cyrile.marmier.codeur.online',
                port: 21,
                authKey: 'key1'
            },
                src: 'view/css',
                dest: '/home/cyrile/portfolio-perso/view/css',
            //    exclusions: ['path/to/source/folder/**/.DS_Store', 'path/to/source/folder/**/Thumbs.db', 'path/to/dist/tmp']
            }
        },

        watch:{
            dist:{
                files : ['view/scss/*.scss'],
                tasks: ['sass:dist' , 'ftp-deploy'],
                options:{
                    spawn: false,
                    livereload: true,
                }
            }
        }
    });

  // Import du package
  //grunt.loadNpmTasks('grunt-contrib-sass')

  // Redéfinition de la tâche `default` qui est la tâche lancée dès que vous lancez Grunt sans rien spécifier.
  // Note : ici, nous définissons sass comme une tâche à lancer si on lance la tâche `default`.
  grunt.registerTask('default', ['watch:dist']);
};
