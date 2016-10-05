<?php

namespace AppBundle\Entity;

/**
 * curso
 */
class curso
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripción;

    /**
     * @var float
     */
    private $precio;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return curso
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripción
     *
     * @param string $descripción
     *
     * @return curso
     */
    public function setDescripción($descripción)
    {
        $this->descripción = $descripción;

        return $this;
    }

    /**
     * Get descripción
     *
     * @return string
     */
    public function getDescripción()
    {
        return $this->descripción;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return curso
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}

