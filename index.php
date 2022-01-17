<?php

require_once __DIR__ . '/Movie.php';

$first_movie = new Movie('Red Notice', 'azione', 2021, 9);
$first_movie->cast = ['Dwayne Johnson', 'Ryan Reynolds', 'Gal Gadot'];
$first_movie->movie_director = 'Rawson Marshall Thurber';
$first_movie->description = 'Nel 2021, l\'agente speciale John Hartley, viene incaricato di assistere l\'agente dell\'Interpol Urvashi Das nelle indagini sul potenziale furto di una delle uova conservate in mostra al Castel Sant\'Angelo a Roma. Il capo della sicurezza respinge le preoccupazioni dopo il loro arrivo e l\'uovo sembra essere ancora lì, ma Hartley intuisce che l\'uovo in mostra è un falso e lo dimostra versandoci sopra una bibita gassata che scoglie il falso uovo. Nella sorpresa generale Das ordina di bloccare tutte le uscite. Tuttavia, prima che la sala venga sigillata, il ladro d\'arte internazionale Nolan Booth riesce a fuggire, ma viene inseguito da Hartley. Dopo un rocambolesco inseguimento Booth riesce a fuggire portando con sé l\'uovo originale.';

$second_movie = new Movie('Dune', 'fantascienza', 2021, 8);
$second_movie->cast = ['Timothée Chalamet', 'Oscar Isaac', 'Zendaya'];
$second_movie->movie_director = 'Denis Villeneuve';
$second_movie->description = 'In un distante futuro dell\'umanità, esiste un pianeta chiamato Arrakis, detto "Dune". Questo pianeta completamente sabbioso è l\'unica fonte della sostanza più preziosa dell\'universo, la "spezia": essa è una sostanza psichedelica simile a una polvere luccicante e presente nelle sabbie che coprono il pianeta, che conferisce il dono della premonizione e amplifica le capacità mentali, rendendo possibile l\'utilizzo dei macchinari per il viaggio interstellare; è inoltre ritenuta sacra dai nativi di Dune, i Fremen, per via degli effetti visionari che ha sugli umani. Un giorno, accade che l\'Imperatore Shaddam Corrino IV toglie il controllo del pianeta Arrakis alla crudele casata Harkonnen per darlo nelle mani della nobile famiglia Atreides, la cui popolarità continua a crescere nel resto dell\'Imperium.';



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
  <h2><?php echo $first_movie->title ?> </h2>
  <ul>
    <li>Genere: <?php echo $first_movie->genre ?></li>
    <li>Anno: <?php echo $first_movie->year ?></li>
    <li>Regista: <?php echo $first_movie->movie_director ?></li>
    <li>Cast: 
      <ul>
      <?php foreach ($first_movie->cast as $actor): ?>
        <li><?php echo $actor ?></li>
      <?php endforeach; ?>
      </ul>
    </li>
    <li>Descrizione: <?php echo $first_movie->description ?></li>
    <li>Gli utenti hanno valutato questo film:  <?php echo $first_movie->getReviews() ?></li>
  </ul>
  <h2><?php echo $second_movie->title ?> </h2>
  <ul>
    <li>Genere: <?php echo $second_movie->genre ?></li>
    <li>Anno: <?php echo $second_movie->year ?></li>
    <li>Regista: <?php echo $second_movie->movie_director ?></li>
    <li>Cast: 
      <ul>
      <?php foreach ($second_movie->cast as $actor): ?>
        <li><?php echo $actor ?></li>
      <?php endforeach; ?>
      </ul>
    </li>
    <li>Descrizione: <?php echo $second_movie->description ?></li>
    <li>Gli utenti hanno valutato questo film:  <?php echo $second_movie->getReviews() ?></li>
  </ul>
</body>
</html>