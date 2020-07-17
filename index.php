<?php
  include __DIR__ . '/database.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajax dischi php</title>
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
      <div class="container">
        <div class="music_container">
          <?php foreach ($database as $disk) { ?>
            <div class="disk">
              <div class="disk-info">
                <img src=" <?php echo $disk['poster'] ?> " alt="cover">
                <h3> <?php echo $disk['title'] ?> </h3>
                <span> <?php echo $disk['author'] ?> </span>
                <span> <?php echo $disk['year'] ?> </span>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </main>
    <!-- Fine main -->
    <!-- Script di JS con Laravel Mix -->
    <script type="text/javascript" src="dist/app.js"></script>
  </body>
</html>
