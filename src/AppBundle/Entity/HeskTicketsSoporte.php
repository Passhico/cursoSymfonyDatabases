<?php

namespace AppBundle\Entity;

/**
 * HeskTicketsSoporte
 */
class HeskTicketsSoporte
{
    /**
     * @var string
     */
    private $trackid;

    /**
     * @var integer
     */
    private $faq;


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
     * Set faq
     *
     * @param integer $faq
     *
     * @return HeskTicketsSoporte
     */
    public function setFaq($faq)
    {
        $this->faq = $faq;

        return $this;
    }

    /**
     * Get faq
     *
     * @return integer
     */
    public function getFaq()
    {
        return $this->faq;
    }
}
