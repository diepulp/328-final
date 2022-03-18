<?php

/**
 *
 */
class Client extends Contact
{
    /**
     * @var string
     */
    private $_photoShoot;

    /**
     * Constructor for the Client object
     */
    public function __construct()
    {
        parent::__construct();

        $this->_photoShoot = [];

    }

    /**
     * methods checks if the object is premium
     * @return int 0 (false)
     */
    public function isPremium(): int
    {
        return 1;
    }

    /**
     * Check whether is a client
     * @return bool
     */
    public function isClient(): bool
    {
        return true;
    }


    /**
     * Initializes local variable to store the client photo shoot options array
     * @param array
     */
    public function setPhotoShoot(array $photoShoot): void
    {
        $this->_photoShoot = $photoShoot;
    }

    /**
     * getter for photo shoot options
     * @return array
     */
    public function getPhotoShoot(): array
    {
        return $this->_photoShoot;
    }

}