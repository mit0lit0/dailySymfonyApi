<?php

namespace AppBundle\Entity;

/**
 * Login
 */
class Login
{
    /**
     * @var string
     */
    private $codlogin;

    /**
     * @var string
     */
    private $pass;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codlogin
     *
     * @param string $codlogin
     *
     * @return Login
     */
    public function setCodlogin($codlogin)
    {
        $this->codlogin = $codlogin;

        return $this;
    }

    /**
     * Get codlogin
     *
     * @return string
     */
    public function getCodlogin()
    {
        return $this->codlogin;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Login
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }
}
