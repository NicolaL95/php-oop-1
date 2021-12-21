<?php
class Movie{
    public $name;

    public $year;

    public $type;

    public $rt_vote;

    function __construct($name,$year,$type,$rt_vote = null){
        $this->name = $name;
        $this->year =$year;
        $this->type =$type;
    }

    public function review($vote){
        $this->rt_vote = $vote;
    }
    
    
}
$movie1 = new Movie("Jurassic Park","1993","Sci-Fi");
    echo "<pre>", var_dump($movie1), "</pre>";
    $movie1->review(90);
   echo "<pre>", var_dump($movie1), "</pre>";
?>