<?php

namespace Devb\GastosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libreta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Libreta
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
     * @ORM\Column(name="nombre", type="string", length=25)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


    /**
     * @ORM\OneToMany(targetEntity="Gasto", mappedBy="libreta")
     */
    protected $gastos;
    
    public function __construct()
    {
    	$this->gastos = new ArrayCollection();
    }
    
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
     * Set nombre
     *
     * @param string $nombre
     * @return Libreta
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Libreta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add gastos
     *
     * @param \Devb\GastosBundle\Entity\Gasto $gastos
     * @return Libreta
     */
    public function addGasto(\Devb\GastosBundle\Entity\Gasto $gastos)
    {
        $this->gastos[] = $gastos;

        return $this;
    }

    /**
     * Remove gastos
     *
     * @param \Devb\GastosBundle\Entity\Gasto $gastos
     */
    public function removeGasto(\Devb\GastosBundle\Entity\Gasto $gastos)
    {
        $this->gastos->removeElement($gastos);
    }

    /**
     * Get gastos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGastos()
    {
        return $this->gastos;
    }
}
