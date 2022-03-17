<?php

/**
 * Class to provide with methods to validate user input
 */
class Validator
{
    /**
     * checks to see that a string is all alphabetic
     * @param $text
     * @return bool
     */
    static function validName($text): bool
    {
        return ctype_alpha($text);
    }

    /**
     * checks to see that a phone number is valid
     * @param $phone
     * @return false|int
     */
    static function validPhone($phone)
    {
        return preg_match('/^[0-9]{10}+$/', $phone);
    }

    /**
     * checks to see that an email address is valid
     * @param $email
     * @return mixed
     */
    static function validEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param $inputValues
     * @return bool
     */
    static function validPhotoShoot($inputValues): bool
    {

        $storedValues = DataLayer::getPhotoshoot();

        if (array_intersect($inputValues, array_values($storedValues)) != $inputValues){
            return false;
        }
        return true;
    }
}