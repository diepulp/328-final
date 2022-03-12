<?php

/**
 * This is the controller class that rerouts between different pages on the Terri Lynn Images website
 */
class Controller
{
    /**
     * @var $_f3
     * fat free object
     */
    private $_f3;

    /**
     * @param $f3
     * fat free object passed into the constructor from the index page
     */
    function __construct($f3){
        $this->_f3 = $f3;
    }

    /**
     * Rerouts to home page
     */
    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Rerouts to gallery page
     */
    function gallery()
    {
        $view = new Template();
        echo $view->render('views/gallery.html');
    }
}