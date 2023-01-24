<?php

// definizione classe Type
class Type {

    public $type;

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

    public function __construct($title, Type $type, $description, $time, $vote)
    {
        $this -> title = $title;
        $this -> type = $type;
        $this -> description = $description;
        $this -> time = $time;
        $this -> vote = $vote;
    }
}
