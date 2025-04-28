<?php

class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public $genre;
   

    public function __construct($title, $director, $releaseYear, $genre) {
        $this->genre = $genre;
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


$movie1 = new Movie("Die Hard", "John McTiernan", 1988, new Genre("Action"));
$movie2 = new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999, new Genre("Sci-Fi"));
$movie3 = new Movie("The Godfather", "Francis Ford Coppola", 1972, new Genre("Crime"));


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
          <li><?php echo $movie1->getTitle(); ?> - Genre: <?php echo $movie1->genre->getType(); ?></li>
          <li><?php echo $movie2->getTitle(); ?> - Genre: <?php echo $movie2->genre->getType(); ?></li>
          <li><?php echo $movie3->getTitle(); ?> - Genre: <?php echo $movie3->genre->getType(); ?></li>
     </ul>
</body>
</html>