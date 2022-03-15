<?php
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

session_start();

//Create an instance of the Base class
$f3 = Base::instance();
$con = new Controller($f3);
$dataLayer = new DataLayer();

$result = $dataLayer->getContacts();

//Define a default root
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

$f3->route('GET /gallery', function(){
    $GLOBALS['con']->gallery();
});

$f3->route('GET|POST /sign-up', function(){
    $GLOBALS['con']->signUp();
});

$f3->route('GET /admin', function(){
    $GLOBALS['con']->admin();
});

$f3->route('GET|POST /photoshoot', function(){
    $GLOBALS['con']->photoshoot();
});


//Run fat-free
$f3->run();