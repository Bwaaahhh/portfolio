<?php
require_once 'controller/pdo.php';
require_once 'controller/class/Portfolio.php';

$portfolio = new Portfolio();

$page = "index.php";
define('WEBROOT', str_replace($page, '', $_SERVER['SCRIPT_NAME']));

    $page = "view/index.php";


    if (isset($_GET['page'])) {
        $page = "view/".$_GET['page'].".php";
    }



include("view/template/index.php");
