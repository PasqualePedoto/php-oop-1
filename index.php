<!-- 
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php

class Movie
{
    // Properties
    public $id;
    public $title;
    public $genre;
    public $release;
    public $language;
    public $plot;

    // Costruttore

    public function __construct($id,$title,$genre,$release,$language,$plot)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->release = $release;
        $this->language = $language;
        $this->plot = $plot;
    }

    // Methods

    public function getFullMovie()
    {
        $movie = "Movie #$this->id : <br />title: $this->title
        <br />genre: $this->genre<br />release: $this->release
        <br />language: $this->language<br />plot: $this->plot.";
        return $movie;
    }

}

$movie1 = new Movie(1,"Il signore degli anelli","fantasy","12-09-2020","italian","Parla di anelli di cipolla");
$movie2 = new Movie(1,"Il signore degli agnelli","romantico","27-05-2014","english","Parla di agnelli da allevamento");

$full_movie_1 = $movie1->getFullMovie();
$full_movie_2 = $movie2->getFullMovie();

echo $full_movie_1;
echo "<br />";
echo "<br />";
echo $full_movie_2;

?>