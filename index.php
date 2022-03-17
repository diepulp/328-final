<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

ob_start();
//Require the autoload file
require_once('vendor/autoload.php');

session_start();
/*var_dump($_SESSION);*/


//Create an instance of the Base class
$f3 = Base::instance();
$con = new Controller($f3);
$dataLayer = new DataLayer();

$result = $dataLayer->getContacts();


//Define a default route
$f3->route('GET /', function ()
{
    $GLOBALS['con']->home();
});

//define gallery route
$f3->route('GET /gallery', function ()
{
    $GLOBALS['con']->gallery();
});

//define signUp route
$f3->route('GET|POST /sign-up', function ()
{
    $GLOBALS['con']->signUp();
});

//define admmin route
$f3->route('GET /admin', function ()
{
    $GLOBALS['con']->admin();
});

//define photo shoot route
$f3->route('GET|POST /photoshoot', function ()
{
    if ($_SESSION['user'] instanceof Client) {
        $GLOBALS['con']->photoshoot();
    } else {
        $GLOBALS['con']->reset();
    }
});

//Run fat-free
$f3->run();
ob_flush();