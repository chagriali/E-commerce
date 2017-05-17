<?php

namespace Stage\appBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colors
 *
 * @ORM\Table(name="colors")
 * @ORM\Entity(repositoryClass="Stage\appBundle\Repository\ColorsRepository")
 */
class Colors
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
     * @ORM\Column(name="FirstColor", type="string", length=7)
     */
    private $firstColor;

    /**
     * @var string
     *
     * @ORM\Column(name="SecondColor", type="string", length=7)
     */
    private $secondColor;


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
     * Set firstColor
     *
     * @param string $firstColor
     *
     * @return Colors
     */
    public function setFirstColor($firstColor)
    {
        $this->firstColor = $firstColor;

        return $this;
    }

    /**
     * Get firstColor
     *
     * @return string
     */
    public function getFirstColor()
    {
        return $this->firstColor;
    }

    /**
     * Set secondColor
     *
     * @param string $secondColor
     *
     * @return Colors
     */
    public function setSecondColor($secondColor)
    {
        $this->secondColor = $secondColor;

        return $this;
    }

    /**
     * Get secondColor
     *
     * @return string
     */
    public function getSecondColor()
    {
        return $this->secondColor;
    }
}
