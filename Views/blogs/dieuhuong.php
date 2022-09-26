<?php 
    $act = isset($_GET['act']) ? $_GET['act'] : "blogs";

    switch($act){
        case 'blogs':
            require_once("home.php");
            break;
        case'single':
            require_once("single.php");
            break;
        default:
        require_once("home.php");
        break;
    }
