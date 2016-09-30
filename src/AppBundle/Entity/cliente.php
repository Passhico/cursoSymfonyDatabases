 q<?php

namespace AppBundle\Entity;

/**
 * cliente
 */
class cliente
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $object;


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
     * Set object
     *
     * @param string $object
     *
     * @return cliente
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }
}

