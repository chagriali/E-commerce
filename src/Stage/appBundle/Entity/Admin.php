<?php

namespace Stage\appBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="Stage\appBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    
    


    /**
     * Many Users have One Address.
     * @ORM\OneToOne(targetEntity="Header")
     *
     */
    private $header;



    /**
     * Many Users have One Address.
     * @ORM\OneToOne(targetEntity="Footer")
     *
     */
    private $footer;

    /**
     * @return mixed
     */
    public function getFooter()
    {
        return $this->footer;
    }



    /**
     * Many Users have One Address.
     * @ORM\OneToOne(targetEntity="Colors")
     *
     */
    private $colors;

    /**
     * @return mixed
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param mixed $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }



    /**
     * @param mixed $footer
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
    }





    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }



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
}
