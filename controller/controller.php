<?php

/**
 * This is the controller class that reroutes between different pages on the Terri Lynn Images website
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
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     * Reroutes to home page
     */
    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Reroutes to gallery page
     */
    function gallery()
    {
        $view = new Template();
        echo $view->render('views/gallery.html');
    }

    /**
     * validates the signUp form
     */
    function signUp()
    {

        $firstName = "";
        $lastName = "";
        $phone = "";
        $email = "";

        global $isValid;

        $GLOBALS['isValid'] = false;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $client = $_POST['client'];

            if (isset($client)) {
                $user = new Client();
            } else {
                $user = new Contact();
            }
            $_SESSION['user'] = $user;

            //Validation

            //validate name
            if (!(filter_has_var(INPUT_POST, 'firstName') &&
                strlen(filter_input(INPUT_POST, 'firstName')) > 0)) {
                $this->_f3->set('errors["firstName"]', "Please enter an alphabetic name");
                $GLOBALS['isValid'] = false;
            }

            $firstName = $_POST['firstName'];

            if (Validator::validName($firstName)) {
                $_SESSION['user']->setFirstName($firstName);
                $this->_f3->set("Session.firstName", $firstName);
                $GLOBALS['isValid'] = true;
            }

            //validate last name
            $lastName = $_POST['lastName'];

            if (Validator::validName($lastName)) {
                $_SESSION['user']->setLastName($lastName);
                $this->_f3->set("Session.lastName", $lastName);
                $GLOBALS['isValid'] = true;
            } else {
                $this->_f3->set('errors["lastName"]', "Please enter an alphabetic name");
                $GLOBALS['isValid'] = false;
            }

            //validate phone
            $phone = $_POST['phone'];

            if (Validator::validPhone($phone)) {
                $_SESSION['user']->setPhone($phone);
                $this->_f3->set("Session.phone", $phone);
                $GLOBALS['isValid'] = true;
            } else {
                $this->_f3->set('errors["phone"]', 'Enter a valid phone');
                $GLOBALS['isValid'] = false;
            }

            //validate email
            $email = $_POST['email'];

            if (Validator::validEmail($email)) {

                $_SESSION['user']->setEmail($email);
                $this->_f3->set("Session.email", $email);
                $GLOBALS['isValid'] = true;

            } else {
                $this->_f3->set('errors["email"]', 'Enter a valid email');
                $GLOBALS['isValid'] = false;
            }

            //Redirect user to some page
            if (empty($this->_f3->get('errors')) && $GLOBALS['isValid'] == true) {

                $this->_f3->reroute('photoshoot');

            }

        }
        $view = new Template();
        echo $view->render('views/sign-up.html');
    }

    /**
     * routes to photo shoot for clients
     */
    function photoshoot()
    {
        //set hive variable for checkboxes
        $photoshootOptions = DataLayer::getPhotoshoot();
        $this->_f3->set('photoshootOptions', $photoshootOptions);

        //If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Add the data to the session variable
            //If interests were selected
            if (isset($_POST['photoshoot'])) {

                //selected checkboxes
                $photoshoot = $_POST['photoshoot'];

                //If interests are valid
                if (Validator::validPhotoShoot($photoshoot)) {
                    $_SESSION['user']->setPhotoShoot($photoshoot);
                } else {
                    $this->_f3->set("errors['photoshoot']", "Invalid selection");
                }
            } else {
                $empty = ["No options were selected"];
                $photoshoot = $empty;
                $_SESSION['user']->setPhotoShoot($photoshoot);
               /* $this->reset();*/
            }

            //redirect to reset
            if (empty($this->_f3->get('errors'))) {

                $stringPhotoShoot = join(", ", $_SESSION['user']->getPhotoShoot());

                $_SESSION['photoshoot'] = $stringPhotoShoot;

                $this->_f3->set('photoshoot', $stringPhotoShoot);

                $this->reset();
            }
        }
        $view = new Template();
        echo $view->render('views/photoshoot.html');
    }

    /**
     * routes to the gallery
     */
    function reset()
    {

        $GLOBALS['dataLayer']->insertContact($_SESSION['user']);

        $this->_f3->reroute('gallery');

    }

    /**
     * routes to admin page
     */
    function admin()
    {
        $contacts = $GLOBALS['dataLayer']->getContacts();

        $this->_f3->set('contacts', $contacts);
        session_destroy();

        $view = new Template();
        echo $view->render('views/admin.html');
    }
}
