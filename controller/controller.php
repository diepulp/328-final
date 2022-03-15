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

    function signUp()
    {

        $firstName = "";
        $lastName = "";
        $phone = "";
        $email = "";

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $client = $_POST['client'];

            if(isset($client)){
                $user = new Client();
            }
            else{
                $user = new Contact();
            }
            $_SESSION['user'] = $user;

            //TODO: Validation required
            $_SESSION['user']->setFirstName($firstName);
            $_SESSION['user']->setLastName($lastName);
            $_SESSION['user']->setPhone($phone);
            $_SESSION['user']->setEmail($email);

            //no need to validate client
            $_SESSION['user']->setClient(isset($client));

            //TODO:Check for validation errors in if statements with &&
            if ($_SESSION['user']->getClient()) {
                $this->_f3->reroute('photoshoot');
            }
            elseif (!$_SESSION['user']->getClient()){
                $this->reset();
            }

        }

        $this->_f3->set('firstName',$firstName);
        $this->_f3->set('lastName',$lastName);
        $this->_f3->set('phone',$phone);
        $this->_f3->set('email',$email);

        $view = new Template();
        echo $view->render('views/sign-up.html');
    }

    function photoshoot()
    {
        $photoshootOptions = DataLayer::getPhotoshoot();
        $this->_f3->set('photoshootOptions',$photoshootOptions);

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            if(isset($_POST['photoshoot'])){
                $photoshoot = $_POST['photoshoot'];

                //TODO: Validate photoshoot array vs selections
                $_SESSION['user']->setPhotoshoot(implode(", ", $photoshoot));

            }
            else{
                $_SESSION['user']->setIndoor("None");
            }


            $this->reset();
        }
        else{
            $view = new Template();
            echo $view->render('views/photoshoot.html');
        }


    }

    function reset()
    {

        $GLOBALS['dataLayer']->insertContact($_SESSION['user']);

        session_destroy();

        $this->_f3->reroute(' ');

        //pop up contact success

    }

    function admin()
    {
        $contacts = $GLOBALS['dataLayer']->getContacts();
        $this->_f3->set('contacts',$contacts);

        $view = new Template();
        echo $view->render('views/admin.html');
    }
}