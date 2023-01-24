<?php

// definizione classe Type
class Type {

    public $type;

    // definisco il costruttore della classe
    public function __construct($type){

        $this -> type = $type;
    }

    public function getType() {
        return " <span>" . $this->type . "</span>";
    }

}

// definizione classe Movie
class Movie {

    // definizione delle variabili
    public $title;
    public array $types;
    public $description;
    public $time;
    public $vote;

    // definisco il costruttore della classe
    public function __construct($title, array $types, $description, $time, $vote)
    {
        $this -> title = $title;
        $this -> types = $types;
        $this -> description = $description;
        $this -> time = $time;
        $this -> vote = $vote;

    }

    // creo la funzione per inserire più generi
    public function getAllType() {
        $str = "";
        foreach ($this -> types as $type) {
            $str .= $type->getType();
        }

        return $str;
    }

    // definisco il metodo per stampare a schermo i dati
    public function getHMTL() {

        return "<h2>" . "Titolo: " . $this->title . "</h2>"
            . "<span>Genere: " . $this -> getAllType() . "</span>"
            . "<p>" . $this->description . "</p>"
            . "<span>" . $this->time . "</span>" . "<br>"
            . "<span>" . $this->vote . "</span>";
    }
}

// creo i generi da inserire nei relativi film
$fantasy = new Type ("Fantasy");
$fantascienza = new Type ("Fantascienza");
$horror = new Type("Horror");
$Avventura = new Type("Avventura");

$signoreAnelli1Type = [$fantasy, $Avventura];
$duneType = [$fantascienza, $Avventura];


// creo il film da stampare successivamente in pagina
$signoreAnelli1 = new Movie("Il Signore degli Anelli - La Compagnia dell'anello", $signoreAnelli1Type, "Un Anello per domarli, un Anello per trovarli,
un Anello per ghermirli e nel buio incatenarli.", "178 min", "4.7");

$dune = new Movie("Dune", $duneType, "La pellicola è la prima parte dell'adattamento cinematografico del romanzo omonimo scritto da Frank Herbert, primo capitolo del ciclo di Dune,[3] già trasposto nel film del 1984 di David Lynch e con le miniserie televisive Dune - Il destino dell'universo (2000) e I figli di Dune (2003). ", "155 min", "4.0");

// stampo i film in pagina
echo "<h1>Elenco Film</h1>";

echo $signoreAnelli1 -> getHMTL();
echo "<br><br>";
echo $dune -> getHMTL();
