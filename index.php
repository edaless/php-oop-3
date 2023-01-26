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
        if ($this->quattordicesima) {

            return ($this->getMensile() * 14);
        } else if ($this->tredicesima) {

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
        return $this->nome . "<br>"
            . $this->cognome . "<br>"
            . $this->giornoNascita . "/" . $this->meseNascita . "/" . $this->annoNascita . "<br>"
            . $this->luogoNascita . "<br>"
            . $this->CF . "<br>";
    }
}

class Impiegato extends Persona
{

    private Persona $persona;
    private Stipendio $stipendio;
    private $annoAssunzione;
    private $meseAssunzione;
    private $giornoAssunzione;



    public function __construct(
        $persona,
        $stipendio,
        $annoAssunzione,
        $meseAssunzione,
        $giornoAssunzione
    ) {

        $this->setPersona($persona);
        $this->setStipendio($stipendio);
        $this->setAnnoAssunzione($annoAssunzione);
        $this->setMeseAssunzione($meseAssunzione);
        $this->setGiornoAssunzione($giornoAssunzione);
    }




    public function getPersona()
    {

        return $this->persona;
    }
    public function setPersona($persona)
    {

        $this->persona = $persona;
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
            $this->persona->getHtml()
            .
            $this->stipendio->getHtml() . "€<br>"
            .
            $this->giornoAssunzione . "/" . $this->meseAssunzione . "/" . $this->annoAssunzione . "<br>";
    }
}


$stipendio = new Stipendio(1000, false, false);
$stipendioTredicesima = new Stipendio(1000, true, false);
$stipendioQuattordicesima = new Stipendio(1000, true, true);


$carlo = new Persona("Carlo", "Ravassi", 2023, 6, 30, "segrate", "vfijvsdics0di");

$impiegato1 = new Impiegato($carlo, $stipendio, 2020, 1, 1);

echo $stipendio->getHtml() . "<br>";
echo $stipendioTredicesima->getHtml() . "<br>";
echo $stipendioQuattordicesima->getHtml() . "<br>";

echo "<br><br><br>";

echo $impiegato1->getHtml();




echo "<br><br><br>okkkk";
