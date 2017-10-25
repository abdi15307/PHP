<?php

/**
 * Created by PhpStorm.
 * User: S.A. Mohamed
 * Date: 9-10-2017
 * Time: 15:25
 */
class Product
{

    private $naam;
    private $prijs;
    private $BTW ;

    public function __construct($kostprijs, $naam, $BTWtarief=1.21)
    {
        $this->naam=$naam;
        $this->prijs=$kostprijs;
        $this->BTW=$BTWtarief;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * @param mixed $prijs
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
        return $this;
    }

    public function geefBtwprijs(){
        return $this->prijs *$this->BTW;
    }

    public function __toString()
    {

        return $this->naam. "  ".$this->geefBtwprijs();
    }

}