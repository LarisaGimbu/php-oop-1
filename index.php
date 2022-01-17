<?php

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/database.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php foreach ($movies as $movie):
    $new_movie = new Movie($movie['title']);
    $new_movie->genre = $movie['genre'];
    $new_movie->year = $movie['year'];
    $new_movie->duration = $movie['duration'];
    $new_movie->cast = $movie['cast'];
    $new_movie->movie_director = $movie['movie_director'];
    $new_movie->description = $movie['description'];
    $new_movie->reviews = $movie['reviews'];

  ?>
  <h2><?php echo $new_movie->title ?> </h2>
  <ul>
    <li>Genere: <?php echo $new_movie->genre ?></li>
    <li>Anno: <?php echo $new_movie->year ?></li>
    <li>Regista: <?php echo $new_movie->movie_director ?></li>
    <li>Cast: 
      <ul>
      <?php foreach ($new_movie->cast as $actor): ?>
        <li><?php echo $actor ?></li>
      <?php endforeach; ?>
      </ul>
    </li>
    <li>Descrizione: <?php echo $new_movie->getExceptedDescription() ?></li>
    <li>Gli utenti hanno valutato questo film:  <?php echo $new_movie->getReviews() ?></li>
  </ul>
  <?php endforeach ?>
  
</body>
</html>