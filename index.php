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


// creo il film da stampare successivamente in pagina
