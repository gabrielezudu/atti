<?php //vedi il libro php for absolute beginners
//session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
//To seth an absolute path for the included files
define('ROOT', dirname(__FILE__));

include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->addScript("js/determineViewJS.js");
$pageData->addCSS('css/style.css');

//require_once 'controllers/indexController.php';
$pageData->contentRight= include 'controllers/indexController.php';

//$pageData->header = include_once "views/header.php";
//$pageData->footer = include_once "views/footer.php";

$page = include_once "views/page_view.php";
echo $page;
