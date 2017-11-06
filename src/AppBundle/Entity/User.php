<?php

namespace AppBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $coduser;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $codlogin;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $birth;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $interestf;

    /**
     * @var string
     */
    private $nivelf;

    /**
     * @var string
     */
    private $opinionf;

    /**
     * @var string
     */
    private $messagef;

    /**
     * @var string
     */
    private $reservationf;


    /**
     * Set coduser
     *
     * @param string $coduser
     *
     * @return User
     */
    public function setCoduser($coduser)
    {
        $this->coduser = $coduser;

        return $this;
    }

    /**
     * Get coduser
     *
     * @return string
     */
    public function getCoduser()
    {
        return $this->coduser;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set codlogin
     *
     * @param string $codlogin
     *
     * @return User
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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set birth
     *
     * @param string $birth
     *
     * @return User
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return string
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return User
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set interestf
     *
     * @param string $interestf
     *
     * @return User
     */
    public function setInterestf($interestf)
    {
        $this->interestf = $interestf;

        return $this;
    }

    /**
     * Get interestf
     *
     * @return string
     */
    public function getInterestf()
    {
        return $this->interestf;
    }

    /**
     * Set nivelf
     *
     * @param string $nivelf
     *
     * @return User
     */
    public function setNivelf($nivelf)
    {
        $this->nivelf = $nivelf;

        return $this;
    }

    /**
     * Get nivelf
     *
     * @return string
     */
    public function getNivelf()
    {
        return $this->nivelf;
    }

    /**
     * Set opinionf
     *
     * @param string $opinionf
     *
     * @return User
     */
    public function setOpinionf($opinionf)
    {
        $this->opinionf = $opinionf;

        return $this;
    }

    /**
     * Get opinionf
     *
     * @return string
     */
    public function getOpinionf()
    {
        return $this->opinionf;
    }

    /**
     * Set messagef
     *
     * @param string $messagef
     *
     * @return User
     */
    public function setMessagef($messagef)
    {
        $this->messagef = $messagef;

        return $this;
    }

    /**
     * Get messagef
     *
     * @return string
     */
    public function getMessagef()
    {
        return $this->messagef;
    }

    /**
     * Set reservationf
     *
     * @param string $reservationf
     *
     * @return User
     */
    public function setReservationf($reservationf)
    {
        $this->reservationf = $reservationf;

        return $this;
    }

    /**
     * Get reservationf
     *
     * @return string
     */
    public function getReservationf()
    {
        return $this->reservationf;
    }
}
