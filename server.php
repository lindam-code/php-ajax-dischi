<?php
  // includo il database
  @include __DIR__ . '/database.php';
  // lo trasfromo in json
  $database_jason = json_encode($database);
  // dico che do un output in json
  header('Content-Type: application/json');
  echo($database_jason);
?>
