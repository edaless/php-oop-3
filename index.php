<?php

class Stipendio
{

    private $mensile;
    private $tredicesima;
    private $quattordicesima;



    public function __construct(
        $mensile,
        $tredicesima,
        $quattordicesima
    ) {

        $this->setMensile($mensile);
        $this->setTredicesima($tredicesima);
        $this->setQuattordicesima($quattordicesima);
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




    public function getQuattordicesima()
    {

        return $this->quattordicesima;
    }
    public function setQuattordicesima($quattordicesima)
    {

        $this->quattordicesima = $quattordicesima;
    }


    // se c'è la quattordicesima non è importante come è settata la tredicesima
    public function getStipendioAnnuo()
    {
        if ($this->quattordicesima) {

            return ($this->getMensile() * 14) . "<br>";
        } else if ($this->tredicesima) {

            return ($this->getMensile() * 13) . "<br>";
        } else {

            return ($this->getMensile() * 12) . "<br>";
        };
    }
}


$stipendio = new Stipendio(1000, false, true);

echo $stipendio->getStipendioAnnuo();


echo "<br><br><br>okkkk";
