<?php
  // includo il database
  @include __DIR__ . '/database.php';
  // lo trasfromo in json
  $database_jason = json_encode($database);


  // echo $_GET['author'];
  // Seleziono in base all'autore scelto dall'utente
  $database_author = [];
  foreach ($database as $disk) {

    if ($_GET['author'] === $disk['author']) {


    }
  }


  // dico che do un output in json
  header('Content-Type: application/json');
  // echo($database_jason);
?>
