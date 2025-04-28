<?php
require_once 'Traits/Platforms.php';
require_once 'Models/movies.php';
require_once 'Models/genres.php';
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Movies</title>
</head>
<body>
   <h1> Movies List </h1>
  
   <ul class="list-group">
    <?php foreach ($movies as $movie): ?>
        <li class="list-group-item mb-3">
            <h5 class="mb-1"><?= $movie->getTitle() ?></h5>
            <p class="mb-1"><strong>Director:</strong> <?= $movie->director ?></p>
            <p class="mb-1"><strong>Release Year:</strong> <?= $movie->releaseYear ?></p>

            <div class="mb-1">
                <strong>Genres:</strong>
                <ul class="list-inline">
                    <?php foreach ($movie->genres as $genre): ?>
                        <li class="list-inline-item badge bg-primary"><?= $genre->getType() ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <strong>Platforms:</strong>
                <ul class="list-inline">
                    <?php foreach ($movie->getPlatforms() as $platform): ?>
                        <li class="list-inline-item badge bg-success"><?= $platform ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>