<?php

/**
 *
 */
class Contact
{
    /**
     * @var string
     */
    private $_firstName;
    /**
     * @var string
     */
    private $_lastName;
    /**
     * @var string
     */
    private $_phone;
    /**
     * @var string
     */
    private $_email;
    /**
     * @var false
     */
    private $_client;

    /**
     *
     */
    public function __construct()
    {
        $this->_firstName = "";
        $this->_lastName = "";
        $this->_phone = "";
        $this->_email = "";
        $this->_client = false;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->_firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->_lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->_lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->_phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->_phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * @return false
     */
    public function getClient(): bool
    {
        return $this->_client;
    }

    /**
     * @param false $client
     */
    public function setClient(bool $client): void
    {
        $this->_client = $client;
    }
}