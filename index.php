<?php

// definizione classe Type
class Type {

    public $type;

    // definisco il costruttore della classe
    public function __construct($type){

        $this -> type = $type;
    }

}

// definizione classe Movie
class Movie {

    // definizione delle variabili
    public $title;
    public Type $type;
    public $description;
    public $time;
    public $vote;

    // definisco il costruttore della classe
    public function __construct($title, Type $type, $description, $time, $vote)
    {
        $this -> title = $title;
        $this -> type = $type;
        $this -> description = $description;
        $this -> time = $time;
        $this -> vote = $vote;

    }

    // definisco il metodo per stampare a schermo i dati
    public function getHMTL() {

        return "<h2>" . "Titolo: " . $this->title . "</h2>"
            . "<span>" . $this->type . "</span>"
            . "<p>" . $this->description . "</p>"
            . "<span>" . $this->time . "</span>" . "<br>"
            . "<span>" . $this->vote . "</span>";
    }
}

// creo i generi da inserire nei relativi film
$type1 = new Type ("Fantasy");
$type2 = new Type ("Fantascienza");
var_dump($type1);
echo "<br><br>";

var_dump($type2);
echo "<br><br>";

// creo il film da stampare successivamente in pagina
$movie1 = new Movie("Il Signore degli Anelli - La Compagnia dell'anello", $type1, "Un Anello per domarli, un Anello per trovarli,
un Anello per ghermirli e nel buio incatenarli.", "178 min", "4.7");
var_dump($movie1);

echo "<br><br>";

$movie2 = new Movie("Dune", $type2, "La pellicola è la prima parte dell'adattamento cinematografico del romanzo omonimo scritto da Frank Herbert, primo capitolo del ciclo di Dune,[3] già trasposto nel film del 1984 di David Lynch e con le miniserie televisive Dune - Il destino dell'universo (2000) e I figli di Dune (2003). ", "155 min", "4.0");
var_dump($movie2);





