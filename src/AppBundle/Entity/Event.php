<?php

namespace AppBundle\Entity;

class Event
{
    private $Id;
    private $Title;

    /**
     * Get Id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return Event
     */
    public function setTitle($title)
    {
        $this->Title = $title;

        return $this;
    }

    /**
     * Get Title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->Title;
    }
}
