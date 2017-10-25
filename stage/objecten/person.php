<?php

class person
{
    private $voornaam;
    private $achternaam;

    public function __construct($firstname, $lastname)
    {
        $this->voornaam = $firstname;
        $this->achternaam = $lastname;
    }

    public function getvoornaam()
    {
        return $this->voornaam;
    }
    public function getachternaam()
    {
        return $this->achternaam;
    }
    public function __toString()
    {

        return $this->voornaam. "  ".$this->achternaam;
    }





}

class person2 extends person
{
    private $leeftijd;
    private $Burgerlijkestaat;

    public function __construct($firstname, $lastname, $age, $Burgerlijkestaat)
    {
        $this->leeftijd = $age;
        $this->Burgerlijkestaat = $Burgerlijkestaat;
        parent::__construct($firstname, $lastname);
    }


    public function getvoornaam()
    {
        return parent::getvoornaam();
    }

    public function getAge()
    {
        return $this->leeftijd;
    }

    public function getBurgerlijkestaat()
    {
        return $this->Burgerlijkestaat;
    }
    public function __toString()
    {
        return  parent::__toString(). "</br>" .$this->leeftijd. "</br>".$this->Burgerlijkestaat;
    }

}




