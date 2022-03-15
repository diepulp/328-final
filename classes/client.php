<?php

/**
 *
 */
class Client extends Contact
{
    /**
     * @var string
     */
    private $_photoshoot;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->_photoshoot = "";

    }

    /**
     * @return string
     */
    public function getPhotoshoot(): string
    {
        return $this->_photoshoot;
    }

    /**
     * @param string $photoshoot
     */
    public function setPhotoshoot(string $photoshoot): void
    {
        $this->_photoshoot = $photoshoot;
    }

}