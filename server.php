<?php
  // includo il database
  @include __DIR__ . '/database.php';
  // // lo trasfromo in json
  // $database_jason = json_encode($database);

  // echo $_GET['author'];
  // Seleziono in base all'autore scelto dall'utente
  $database_response = [];
  if ($_GET['author'] && $_GET['author'] !== 'All')   {
    foreach ($database as $disk) {
      if ($_GET['author'] === $disk['author']) {
      $database_response[] = $disk;
      }
    }
  } else {
    $database_response = $database;
  }

  // lo trasfromo in json
  $database_json = json_encode($database_response);

  // dico che do un output in json
  header('Content-Type: application/json');
  echo $database_json;
?>
