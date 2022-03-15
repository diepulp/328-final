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

    function signUp()
    {

        $firstName = "";
        $lastName = "";
        $phone = "";
        $email = "";

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
            //making sure $_POST['firstName'] exists
            if (!(filter_has_var(INPUT_POST, 'firstName') &&
                strlen(filter_input(INPUT_POST, 'firstName')) > 0)) {

                $firstName = $_POST['firstName'];

                if (Validator::validName($firstName)) {
                    $_SESSION['user']->setFirstName($firstName);
                    $this->_f3->set("Session.firstName", $firstName);
                } else {
                    $this->_f3->set('errors["firstName"]', "Please enter an alphabetic name");
                }

                //validate last name
                $lastName = $_POST['lastName'];

                if (Validator::validName($lastName)) {
                    $_SESSION['user']->setLastName($lastName);
                    $this->_f3->set("Session.lastName", $lastName);
                } else {
                    $this->_f3->set('errors["lastName"]', "Please enter an alphabetic name");
                }

                //validate phone
                $phone = $_POST['phone'];

                if (Validator::validPhone($phone)) {
                    $_SESSION['user']->setPhone($phone);
                    $this->_f3->set("Session.phone", $phone);
                } else {
                    $this->_f3->set('errors["phone"]', 'Enter a valid phone');
                }

                //validate email
                $email = $_POST['email'];

                if (Validator::validEmail($email)) {
                    $_SESSION['user']->setEmail($email);
                    $this->_f3->set("Session.email", $email);
                } else {
                    $this->_f3->set('errors["email"]', 'Enter a valid email');
                }
            }

            foreach($this->_f3->get('errors') as $error){
                echo $error;
            }

            //Redirect user to home page
            if (empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('/');
            }

            //no need to validate client
            $_SESSION['user']->setClient(isset($client));

              //TODO:Check for validation errors in if statements with &&
              if ($_SESSION['user']->getClient()) {
                  $this->_f3->reroute('photoshoot');
              } else {
                  $this->reset();
              }


        }
        $view = new Template();
        echo $view->render('views/sign-up.html');
    }

    function photoshoot()
    {
        $photoshootOptions = DataLayer::getPhotoshoot();
        $this->_f3->set('photoshootOptions', $photoshootOptions);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['photohoot'])) {
                $photoshoot = $_POST['photoshoot'];

                //TODO: Validate photoshoot array vs selections
                $_SESSION['user']->setPhotoshoot(implode(", ", $photoshoot));

            } else {
                $_SESSION['user']->setIndoor("None");
            }
            $this->reset();
        } else {
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
        $this->_f3->set('contacts', $contacts);

        $view = new Template();
        echo $view->render('views/admin.html');
    }
}