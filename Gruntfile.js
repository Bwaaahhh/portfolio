// Ligne a taper pour que ce fichier Gruntfile.js marche correctement

//  npm init puis plusieurs fois entrée
//  npm install -g grunt-cli
//  npm install grunt --save-dev
//  touch Gruntfile.js
//  npm install --save-dev load-grunt-tasks
//  require('load-grunt-tasks')(grunt);
//
//  npm install grunt-contrib-watch --save-dev
//  npm install grunt-contrib-sass --save-dev
//  npm install grunt-ftp-deploy --save-dev
//     touch .ftppass pour mettre les logs du serveur comme ceci
                    //     {
                    //   "key1": {
                    //     "username": "username",
                    //     "password": "password"
                    //   }
                    // }
//
//


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
                host: 'cyrile.marmier.codeur.online',   // host du serveur
                port: 21,                               // port
                authKey: 'key1'                         // log relié au fichier .ftppass
            },
                src: 'view/css',                        // dossier source
                dest: '/home/cyrile/portfolio-perso/view/css',   // dossier cible
            //    exclusions: ['path/to/source/folder/**/.DS_Store', 'path/to/source/folder/**/Thumbs.db', 'path/to/dist/tmp']
            }
        },

        watch:{
            dist:{
                files : ['view/scss/*.scss'],            // dossier que le watch regarde
                tasks: ['sass:dist' , 'ftp-deploy'],                    // tache qu'il fait a la modification
                options:{
                    spawn: false,                        // gain de temps
                    livereload: true,                    // livereload a la modification du scss  port utilisé de base 35729
                }     // <script src="//localhost:35729/livereload.js"></script>
            }         //  A placer juste avant la fermeture de la balise </body>  pour que le livereload fonctionne
        }
    });


  // Redéfinition de la tâche `default` qui est la tâche lancée dès que vous lancez Grunt sans rien spécifier.
  // Note : ici, nous définissons sass comme une tâche à lancer si on lance la tâche `default`.
  grunt.registerTask('default', ['watch:dist']);
};
