<?php

namespace Acme\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\Bundle\ProductBundle\Entity\Serie;

class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
    */
    protected $serie; 

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set serie
     *
     * @param \Acme\Bundle\ProductBundle\Entity\Serie $serie
     * @return Product
     */
    public function setSerie(\Acme\Bundle\ProductBundle\Entity\Serie $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \Acme\Bundle\ProductBundle\Entity\Serie 
     */
    public function getSerie()
    {
        return $this->serie;
    }
}
