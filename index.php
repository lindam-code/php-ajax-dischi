<?php
  include 'database.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajax dischi</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <!-- Inizio header -->
    <header>
      <div class="container">
        <img class="logo" src="img/logo.png" alt="logo">
      </div>
    </header>
    <!-- Fine header -->

    <!-- Inizio main -->
    <main>
      <div class="music_container">
        <?php foreach ($database as $disk) { ?>
        <div class="disk">
          <img class="cover" src=" <?php echo $disk['poster'] ?> " alt="cover">
          <h3> <?php echo $disk['title'] ?> </h3>
          <span> <?php echo $disk['author'] ?> </span>
          <span> <?php echo $disk['year'] ?> </span>
        </div>
      <?php } ?>
      </div>
    </main>
    <!-- Fine main -->
  </body>
</html>
