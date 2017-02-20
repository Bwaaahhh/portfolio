<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio Cyril Etievant</title>
        <link rel="stylesheet" type="text/css" href="view/css/style.css">
        <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        <link rel="stylesheet" type="text/javascript" src="view/js/js.js">
    </head>
    <body>
        <header>
            <div class="menu">
                <div class="close_menu">
                    <img src="view/images/exit.png" alt="">
                    <p>fermer</p>
                </div>
                <div class="visu_menu">
                    <div><p>A PROPOS</p></div>
                    <div><p>PROJETS</p></div>
                    <div><p>CONTACT</p></div>
                </div>
            </div>
            <div class="menu_visible">
                <div class="link_menu">
                    <a href="#" >
                        <img src="view/images/menu.png" alt="Icone représentant un menu">
                        <p>MENU</p>
                    </a>
                </div>
                <img src="view/images/logo.png" alt="Un C blanc dans un carré noir. Logo du site">
                <div class="renseignements">
                    <p>07.00.00.00.00</p>
                    <p>lalalala@gmail.com</p>
                </div>
            </div>
        </header>
        <main>
            <?php include($page) ?>
        </main>

        <footer></footer>
    </body>
</html>
