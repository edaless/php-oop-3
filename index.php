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
    public function getHtml()
    {
        if ($this->getQuattordicesima()) {

            return ($this->getMensile() * 14);
        } else if ($this->getTredicesima()) {

            return ($this->getMensile() * 13);
        } else {

            return ($this->getMensile() * 12);
        };
    }
}

class Persona
{

    private $nome;
    private $cognome;
    private $annoNascita;
    private $meseNascita;
    private $giornoNascita;
    private $luogoNascita;
    private $CF;



    public function __construct(
        $nome,
        $cognome,
        $annoNascita,
        $meseNascita,
        $giornoNascita,
        $luogoNascita,
        $CF
    ) {

        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setAnnoNascita($annoNascita);
        $this->setMeseNascita($meseNascita);
        $this->setGiornoNascita($giornoNascita);
        $this->setLuogoNascita($luogoNascita);
        $this->setCF($CF);
    }




    public function getNome()
    {

        return $this->nome;
    }
    public function setNome($nome)
    {

        $this->nome = $nome;
    }




    public function getCognome()
    {

        return $this->cognome;
    }
    public function setCognome($cognome)
    {

        $this->cognome = $cognome;
    }




    public function getAnnoNascita()
    {

        return $this->annoNascita;
    }
    public function setAnnoNascita($annoNascita)
    {

        $this->annoNascita = $annoNascita;
    }



    public function getMeseNascita()
    {

        return $this->meseNascita;
    }
    public function setMeseNascita($meseNascita)
    {

        $this->meseNascita = $meseNascita;
    }




    public function getGiornoNascita()
    {

        return $this->giornoNascita;
    }
    public function setGiornoNascita($giornoNascita)
    {

        $this->giornoNascita = $giornoNascita;
    }





    public function getLuogoNascita()
    {

        return $this->luogoNascita;
    }
    public function setLuogoNascita($luogoNascita)
    {

        $this->luogoNascita = $luogoNascita;
    }





    public function getCF()
    {

        return $this->CF;
    }
    public function setCF($CF)
    {

        $this->CF = $CF;
    }


    public function getHtml()
    {
        return $this->getNome() . "<br>"
            . $this->getCognome() . "<br>"
            . $this->getGiornoNascita() . "/" . $this->meseNascita . "/" . $this->annoNascita . "<br>"
            . $this->getLuogoNascita() . "<br>"
            . $this->getCF() . "<br>";
    }
}

class Impiegato extends Persona
{

    private $stipendio;
    private $annoAssunzione;
    private $meseAssunzione;
    private $giornoAssunzione;



    public function __construct(
        $nome,
        $cognome,
        $annoNascita,
        $meseNascita,
        $giornoNascita,
        $luogoNascita,
        $CF,
        $stipendio,
        $annoAssunzione,
        $meseAssunzione,
        $giornoAssunzione
    ) {
        parent::__construct(
            $nome,
            $cognome,
            $annoNascita,
            $meseNascita,
            $giornoNascita,
            $luogoNascita,
            $CF
        );
        $this->setStipendio($stipendio);
        $this->setAnnoAssunzione($annoAssunzione);
        $this->setMeseAssunzione($meseAssunzione);
        $this->setGiornoAssunzione($giornoAssunzione);
    }






    public function getStipendio()
    {

        return $this->stipendio;
    }
    public function setStipendio($stipendio)
    {

        $this->stipendio = $stipendio;
    }






    public function getAnnoAssunzione()
    {

        return $this->annoAssunzione;
    }
    public function setAnnoAssunzione($annoAssunzione)
    {

        $this->annoAssunzione = $annoAssunzione;
    }



    public function getMeseAssunzione()
    {

        return $this->meseAssunzione;
    }
    public function setMeseAssunzione($meseAssunzione)
    {

        $this->meseAssunzione = $meseAssunzione;
    }




    public function getGiornoAssunzione()
    {

        return $this->giornoAssunzione;
    }
    public function setGiornoAssunzione($giornoAssunzione)
    {

        $this->giornoAssunzione = $giornoAssunzione;
    }




    public function getHtml()
    {
        return
            parent::getHtml()
            .
            $this->stipendio->getHtml() . "€<br>"
            .
            $this->getGiornoAssunzione() . "/" . $this->meseAssunzione . "/" . $this->getAnnoAssunzione() . "<br>";
    }
}


class Capo extends Persona
{

    private $dividendo;
    private $bonus;



    public function __construct(
        $nome,
        $cognome,
        $annoNascita,
        $meseNascita,
        $giornoNascita,
        $luogoNascita,
        $CF,
        $dividendo,
        $bonus
    ) {
        parent::__construct(
            $nome,
            $cognome,
            $annoNascita,
            $meseNascita,
            $giornoNascita,
            $luogoNascita,
            $CF
        );
        $this->setDividendo($dividendo);
        $this->setBonus($bonus);
    }






    public function getDividendo()
    {

        return $this->dividendo;
    }
    public function setDividendo($dividendo)
    {

        $this->dividendo = $dividendo;
    }






    public function getBonus()
    {

        return $this->bonus;
    }
    public function setBonus($bonus)
    {

        $this->bonus = $bonus;
    }



    public function getHtml()
    {
        return
            parent::getHtml()
            . $this->getDividendo() . "<br>"
            . $this->getBonus() . "<br>";
    }
}


$stipendio = new Stipendio(1000, false, false);
$stipendioTredicesima = new Stipendio(1000, true, false);
$stipendioQuattordicesima = new Stipendio(1000, true, true);


// $carlo = new Persona("Carlo", "Ravassi", 2023, 6, 30, "segrate", "vfijvsdics0di");

$impiegato1 = new Impiegato("Carletto", "Ravassi", 1990, 6, 30, "segrate", "vfijvsdics0di", $stipendioTredicesima, 2020, 1, 1);
$capo1 = new Capo("Carletto", "Ravassi", 1990, 6, 30, "segrate", "vfijvsdics0di", 300, 5000);

// echo $stipendio->getHtml() . "<br>";
// echo $stipendioTredicesima->getHtml() . "<br>";
// echo $stipendioQuattordicesima->getHtml() . "<br>";

// echo "<br><br><br>";

echo $impiegato1->getHtml();
echo "<br><br><br>";

echo $capo1->getHtml();




echo "<br><br><br>okkkk";
