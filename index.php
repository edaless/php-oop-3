<?php

class Stipendio
{

    private $mensile;
    private $tredicesima;



    public function __construct(
        $mensile,
        $tredicesima
    ) {

        $this->setMensile($mensile);
        $this->setTredicesima($tredicesima);
    }




    public function getMensile()
    {

        return $this->mensile;
    }
    public function setMensile($mensile)
    {

        $this->mensile = $mensile;
    }




    public function getTredicesima()
    {

        return $this->tredicesima;
    }
    public function setTredicesima($tredicesima)
    {

        $this->tredicesima = $tredicesima;
    }



    public function getStipendio()
    {

        return ($this->getMensile() * 12) . "<br>";
    }
}


$stipendio = new Stipendio(1000, false);

echo $stipendio->getStipendio();
