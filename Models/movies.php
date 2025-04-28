<?php 
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
?>