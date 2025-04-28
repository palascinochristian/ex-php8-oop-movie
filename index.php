<?php

class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public $genres = [];
   

    public function __construct($title, $director, $releaseYear, $genres = []) {
        $this->genres = $genres;
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
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


$movie1 = new Movie("Die Hard", "John McTiernan", 1988, [new Genre("Action"), new Genre("Thriller")]);
$movie2 = new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999, [new Genre("Sci-Fi"), new Genre("Action")]);
$movie3 = new Movie("The Godfather", "Francis Ford Coppola", 1972, [new Genre("Crime"), new Genre("Drama")]);


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
        </li>
        <li>
            <h2><?php echo $movie2->getTitle(); ?></h2>
    
            <p>Genres: 
                <?php foreach ($movie2->genres as $genre) {
                    echo $genre->getType() . ", ";
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
        </li>

        <?php  //echo var_dump($movie1, $movie2, $movie3)?>
     </ul>
</body>
</html>