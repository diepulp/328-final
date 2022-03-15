<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php');
/**
 *
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
        try{
            $this->_dbh = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "YAY!";
        }
        catch (PDOException $e) {
            echo "Error connecting to db" . $e->getMessage();
        }
    }

    function insertContact($user){
        //1. define query
        if ($user->getClient()){
            $sql = "INSERT INTO contacts(`fname`, `lname`, `phone`, `email`, `client`, `photoshoot`) 
                                 values (:firstName, :lastName, :phone, :email, :client, :photoshoot)";
            $client = 1;

        }
        else{
            $sql = "INSERT INTO contacts(`fname`, `lname`, `phone`, `email`, `client`) 
                                 values (:firstName, :lastName, :phone, :email, :client)";
            $client = 0;
        }

        //2. prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. bind the parameters
        $statement->bindParam(':firstName',$user->getFirstName());
        $statement->bindParam(':lastName',$user->getLastName());
        $statement->bindParam(':phone',$user->getPhone());
        $statement->bindParam(':email',$user->getEmail());
        $statement->bindParam(':client',$client);
        if ($user->getClient()){
            $statement->bindParam(':photoshoot',$user->getPhotoshoot());
        }

        //4. execute the query
        $statement->execute();

        //5. process the results
        $id = $this->_dbh->lastInsertId();
        return $id;
    }

    function getContacts(){
        //1. define query
        $sql = "SELECT * FROM contacts";

        //2. prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. bind the parameters

        //4. execute the query
        $statement->execute();

        //5. process the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    static function getPhotoshoot()
    {
        return array('wedding', 'high school senior', 'maternity', 'family', 'newborn');
    }

}

