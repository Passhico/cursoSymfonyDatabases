<?php

namespace AppBundle\Entity;

/**
 * HeskTicketsArchivados
 */
class HeskTicketsArchivados
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $trackid = '';

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var integer
     */
    private $category = '1';

    /**
     * @var string
     */
    private $priority = '3';

    /**
     * @var string
     */
    private $subject = '';

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $dt = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $lastchange = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $ip = '';

    /**
     * @var string
     */
    private $status = '1';

    /**
     * @var string
     */
    private $lastreplier = '0';

    /**
     * @var string
     */
    private $archive = '0';

    /**
     * @var string
     */
    private $attachments;

    /**
     * @var string
     */
    private $custom1 = '';

    /**
     * @var string
     */
    private $custom2 = '';

    /**
     * @var string
     */
    private $custom3 = '';

    /**
     * @var string
     */
    private $custom4 = '';

    /**
     * @var string
     */
    private $custom5 = '';

    /**
     * @var string
     */
    private $modificadoPor = '';

    /**
     * @var string
     */
    private $fecha = '';

    /**
     * @var \DateTime
     */
    private $fechaActivo;

    /**
     * @var integer
     */
    private $usuarioActivo;


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
     * Set trackid
     *
     * @param string $trackid
     *
     * @return HeskTicketsArchivados
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return string
     */
    public function getTrackid()
    {
        return $this->trackid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return HeskTicketsArchivados
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
     * Set email
     *
     * @param string $email
     *
     * @return HeskTicketsArchivados
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
     * Set category
     *
     * @param integer $category
     *
     * @return HeskTicketsArchivados
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set priority
     *
     * @param string $priority
     *
     * @return HeskTicketsArchivados
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return HeskTicketsArchivados
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return HeskTicketsArchivados
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dt
     *
     * @param \DateTime $dt
     *
     * @return HeskTicketsArchivados
     */
    public function setDt($dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Get dt
     *
     * @return \DateTime
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Set lastchange
     *
     * @param \DateTime $lastchange
     *
     * @return HeskTicketsArchivados
     */
    public function setLastchange($lastchange)
    {
        $this->lastchange = $lastchange;

        return $this;
    }

    /**
     * Get lastchange
     *
     * @return \DateTime
     */
    public function getLastchange()
    {
        return $this->lastchange;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return HeskTicketsArchivados
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return HeskTicketsArchivados
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set lastreplier
     *
     * @param string $lastreplier
     *
     * @return HeskTicketsArchivados
     */
    public function setLastreplier($lastreplier)
    {
        $this->lastreplier = $lastreplier;

        return $this;
    }

    /**
     * Get lastreplier
     *
     * @return string
     */
    public function getLastreplier()
    {
        return $this->lastreplier;
    }

    /**
     * Set archive
     *
     * @param string $archive
     *
     * @return HeskTicketsArchivados
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return string
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set attachments
     *
     * @param string $attachments
     *
     * @return HeskTicketsArchivados
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Get attachments
     *
     * @return string
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set custom1
     *
     * @param string $custom1
     *
     * @return HeskTicketsArchivados
     */
    public function setCustom1($custom1)
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * Get custom1
     *
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * Set custom2
     *
     * @param string $custom2
     *
     * @return HeskTicketsArchivados
     */
    public function setCustom2($custom2)
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * Get custom2
     *
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * Set custom3
     *
     * @param string $custom3
     *
     * @return HeskTicketsArchivados
     */
    public function setCustom3($custom3)
    {
        $this->custom3 = $custom3;

        return $this;
    }

    /**
     * Get custom3
     *
     * @return string
     */
    public function getCustom3()
    {
        return $this->custom3;
    }

    /**
     * Set custom4
     *
     * @param string $custom4
     *
     * @return HeskTicketsArchivados
     */
    public function setCustom4($custom4)
    {
        $this->custom4 = $custom4;

        return $this;
    }

    /**
     * Get custom4
     *
     * @return string
     */
    public function getCustom4()
    {
        return $this->custom4;
    }

    /**
     * Set custom5
     *
     * @param string $custom5
     *
     * @return HeskTicketsArchivados
     */
    public function setCustom5($custom5)
    {
        $this->custom5 = $custom5;

        return $this;
    }

    /**
     * Get custom5
     *
     * @return string
     */
    public function getCustom5()
    {
        return $this->custom5;
    }

    /**
     * Set modificadoPor
     *
     * @param string $modificadoPor
     *
     * @return HeskTicketsArchivados
     */
    public function setModificadoPor($modificadoPor)
    {
        $this->modificadoPor = $modificadoPor;

        return $this;
    }

    /**
     * Get modificadoPor
     *
     * @return string
     */
    public function getModificadoPor()
    {
        return $this->modificadoPor;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     *
     * @return HeskTicketsArchivados
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaActivo
     *
     * @param \DateTime $fechaActivo
     *
     * @return HeskTicketsArchivados
     */
    public function setFechaActivo($fechaActivo)
    {
        $this->fechaActivo = $fechaActivo;

        return $this;
    }

    /**
     * Get fechaActivo
     *
     * @return \DateTime
     */
    public function getFechaActivo()
    {
        return $this->fechaActivo;
    }

    /**
     * Set usuarioActivo
     *
     * @param integer $usuarioActivo
     *
     * @return HeskTicketsArchivados
     */
    public function setUsuarioActivo($usuarioActivo)
    {
        $this->usuarioActivo = $usuarioActivo;

        return $this;
    }

    /**
     * Get usuarioActivo
     *
     * @return integer
     */
    public function getUsuarioActivo()
    {
        return $this->usuarioActivo;
    }
}
