<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio Cyril Etievant</title>
        <link rel="stylesheet" type="text/css" href="view/template/foundation.min.css"/>
        <link rel="stylesheet" href="view/template/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
        <script type="text/javascript" src="view/js/js.js"> </script>
        <script type="text/javascript" src="view/js/formulaire.js"></script>

        </script>
    </head>
    <body>
        <header>
            <div class="row fullWidth">
                <div class="menu large-12">
                    <div class="close_menu large-4">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        <p>fermer</p>
                    </div>
                    <div class="visu_menu">
                        <div class="large-4 columns"><a href="index.php?page=apropos"><p>A PROPOS</p></a></div>
                        <div class="large-4 columns"><a href="index.php?page=projet"><p>PROJETS</p></a></div>
                        <div class="large-4 columns end"><a href="index.php?page=contact"><p>CONTACT</p></a></div>
                    </div>
                </div>
            </div>
            <div class="row menu_visible ">
                <div class="link_menu medium-2 columns">
                    <a href="#" >
                        <i class="fa fa-bars fa-2x " aria-hidden="true"></i>
                        <p>MENU</p>
                    </a>
                </div>
                <a href="index.php">
                    <img id="logo" class="medium-1 columns medium-offset-3 " src="view/images/logo.png" alt="Un C blanc dans un carré noir. Logo du site">
                </a>
                <div class="renseignements medium-2 medium-offset-3 columns">
                    <p>07.00.00.00.00</p>
                    <p>lalalala@gmail.com</p>
                </div>
            </div>
        </header>
        <main>
            <?php include($page) ?>
        </main>

        <footer>
            <div class="row">
                <div class="medium-5 columns large-centered ">
                    <img src="view/images/copyright.svg" alt="">
                    <p>cyril etievant - tous droits reserves.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
