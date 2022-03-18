<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/../pdo-config.php');

/**
 * Model class handles the DB connection
 * as well as pulling data from the Data base to populate on the admin page
 */
class DataLayer
{

    /**
     * @var PDO database
     */
    private $_dbh;


    /**
     * constructs a new database access
     */
    function __construct()
    {
        try {
            $this->_dbh = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
        } catch (PDOException $e) {
            echo "Error connecting to db" . $e->getMessage();
        }
    }

    /**
     * Method insert user input data into the DB
     * @param $user
     */
    function insertContact($user)
    {
        //define the query
        $sql = "INSERT INTO member(`fname`, `lname`, `phone`, `email`, `premium`, interests)
                                 values (:firstName, :lastName, :phone, :email, :client, :photoShoot)";

        // prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. bind the parameters
        $statement->bindParam(':firstName', $user->getFirstName());
        $statement->bindParam(':lastName', $user->getLastName());
        $statement->bindParam(':phone', $user->getPhone());
        $statement->bindParam(':email', $user->getEmail());
        $statement->bindParam(':client', $user->isPremium());
        if ($user->isClient()) {
            $stringPhotoShoot = join(", ", $user->getPhotoShoot());
            $statement->bindParam(':photoShoot', $stringPhotoShoot);
        } else{
            $photoShootNull = "";
            $statement->bindParam(':photoShoot', $photoShootNull);
        }

        // execute the query
        $statement->execute();

    }

    /**
     * Retrives the data form the database
     * @return array|false
     */
    function getContacts()
    {
        // define query
        $sql = "SELECT fname, lname, phone, email, premium, interests, member_id from member";

        // prepare the statement
        $statement = $this->_dbh->prepare($sql);

        // execute the query
        $statement->execute();

        // process the results
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Array of photo shoot options for validation
     * @return string[]
     */
    static function getPhotoShoot(): array
    {
        return array('wedding', 'high school senior', 'maternity', 'family', 'newborn');
    }

}

