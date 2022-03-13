<?php
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
require_once ('controller/controller.php');

//Create an instance of the Base class
$f3 = Base::instance();
$con = new Controller($f3);

//Define a default root
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

$f3->route('GET /gallery', function(){
    $GLOBALS['con']->gallery();
});



//Run fat-free
$f3->run();