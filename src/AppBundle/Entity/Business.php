<?php

namespace AppBundle\Entity;

/**
 * Business
 */
class Business
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $codbusiness;

    /**
     * @var string
     */
    private $oficialname;

    /**
     * @var string
     */
    private $addressf;

    /**
     * @var string
     */
    private $categoryf;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $photof;

    /**
     * @var string
     */
    private $contactf;


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
     * Set codbusiness
     *
     * @param string $codbusiness
     *
     * @return Business
     */
    public function setCodbusiness($codbusiness)
    {
        $this->codbusiness = $codbusiness;

        return $this;
    }

    /**
     * Get codbusiness
     *
     * @return string
     */
    public function getCodbusiness()
    {
        return $this->codbusiness;
    }

    /**
     * Set oficialname
     *
     * @param string $oficialname
     *
     * @return Business
     */
    public function setOficialname($oficialname)
    {
        $this->oficialname = $oficialname;

        return $this;
    }

    /**
     * Get oficialname
     *
     * @return string
     */
    public function getOficialname()
    {
        return $this->oficialname;
    }

    /**
     * Set addressf
     *
     * @param string $addressf
     *
     * @return Business
     */
    public function setAddressf($addressf)
    {
        $this->addressf = $addressf;

        return $this;
    }

    /**
     * Get addressf
     *
     * @return string
     */
    public function getAddressf()
    {
        return $this->addressf;
    }

    /**
     * Set categoryf
     *
     * @param string $categoryf
     *
     * @return Business
     */
    public function setCategoryf($categoryf)
    {
        $this->categoryf = $categoryf;

        return $this;
    }

    /**
     * Get categoryf
     *
     * @return string
     */
    public function getCategoryf()
    {
        return $this->categoryf;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Business
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set photof
     *
     * @param string $photof
     *
     * @return Business
     */
    public function setPhotof($photof)
    {
        $this->photof = $photof;

        return $this;
    }

    /**
     * Get photof
     *
     * @return string
     */
    public function getPhotof()
    {
        return $this->photof;
    }

    /**
     * Set contactf
     *
     * @param string $contactf
     *
     * @return Business
     */
    public function setContactf($contactf)
    {
        $this->contactf = $contactf;

        return $this;
    }

    /**
     * Get contactf
     *
     * @return string
     */
    public function getContactf()
    {
        return $this->contactf;
    }
}

