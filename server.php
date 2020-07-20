<?php
  // includo il database
  @include __DIR__ . '/database.php';

  // avviso che l'output è in json
  header('Content-Type: application/json');

  if (!empty($_GET['author-list'])) {
    $author_array = [];
    // Restituisco la lista degli autori per popolare la select
    foreach ($database as $disk) {
      //controllo di non avere doppioni nei nomi degli autori
      if (!in_array($disk['author'],$author_array)) {
        $author_array[] = $disk['author'];
      }
      
    }
    echo json_encode($author_array);

  } elseif ($_GET['author'] && $_GET['author'] !== 'All') {
    // Filtro il database in base all'autore scelto dall'utente
    $database_filtered = [];
    foreach ($database as $disk) {
      if ($_GET['author'] === $disk['author']) {
      $database_filtered[] = $disk;
      }
    }
    echo json_encode($database_filtered);
  } else {
    echo json_encode($database);
  }

?>
