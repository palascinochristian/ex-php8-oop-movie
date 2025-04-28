<?php

require_once 'Traits/Platforms.php';

class Movie {
    use Platforms;
    public $title;
    public $director;
    public $releaseYear;
    public $genres = [];
   
    
    public function __construct($title, $director, $releaseYear, $genres = [], $platforms = []) {
        $this->genres = $genres;
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
        $this->platforms = $platforms;
    }

    public function getTitle() {
        return $this->title;
    }
}

class Genre {
    public $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}


$movie1 = new Movie("Die Hard", "John McTiernan", 1988, [new Genre("Action"), new Genre("Thriller")], ["Netflix", "HBO Max"]);
$movie2 = new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999, [new Genre("Sci-Fi"), new Genre("Action")], ["Netflix", "HBO Max"]);
$movie3 = new Movie("The Godfather", "Francis Ford Coppola", 1972, [new Genre("Crime"), new Genre("Drama")], ["Netflix", "HBO Max"]);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
   <h1> Movies List </h1>
    <ul>
        <li>
            <h2><?php echo $movie1->getTitle(); ?></h2>
            <p>Genres: 
                <?php foreach ($movie1->genres as $genre) {
                    echo $genre->getType() . ", ";
                } ?>
            </p>
            <p>Platforms: 
                <?php foreach ($movie1->getPlatforms() as $platform) {
                    echo $platform . ", ";
                } ?>
            </p>
        </li>
        <li>
            <h2><?php echo $movie2->getTitle(); ?></h2>
    
            <p>Genres: 
                <?php foreach ($movie2->genres as $genre) {
                    echo $genre->getType() . ", ";
                } ?>
            </p>
            <p>Platforms: 
                <?php foreach ($movie2->getPlatforms() as $platform) {
                    echo $platform . ", ";
                } ?>
            </p>
        </li>
        <li>
            <h2><?php echo $movie3->getTitle(); ?></h2>
            <p>Genres: 
                <?php foreach ($movie3->genres as $genre) {
                    echo $genre->getType() . ", ";
                } ?>
            </p>
            <p>Platforms: 
                <?php foreach ($movie3->getPlatforms() as $platform) {
                    echo $platform . ", ";
                } ?>
            </p>
        </li>

        <?php  //echo var_dump($movie1, $movie2, $movie3)?>
     </ul>
</body>
</html>