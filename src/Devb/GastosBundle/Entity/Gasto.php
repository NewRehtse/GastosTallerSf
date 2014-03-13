<?php

namespace Devb\GastosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gasto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Gasto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=50)
     */
    private $concepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=50)
     */
    private $lugar;
    
    /**
     * @ORM\ManyToOne(targetEntity="Libreta", inversedBy="libretas")
     * @ORM\JoinColumn(name="libreta_id", referencedColumnName="id")
     */
    protected $libreta;


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
     * Set concepto
     *
     * @param string $concepto
     * @return Gasto
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Gasto
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     * @return Gasto
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set libreta
     *
     * @param \Devb\GastosBundle\Entity\Libreta $libreta
     * @return Gasto
     */
    public function setLibreta(\Devb\GastosBundle\Entity\Libreta $libreta = null)
    {
        $this->libreta = $libreta;

        return $this;
    }

    /**
     * Get libreta
     *
     * @return \Devb\GastosBundle\Entity\Libreta 
     */
    public function getLibreta()
    {
        return $this->libreta;
    }
}
