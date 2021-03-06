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
        <div>
          <label>Scegli autore</label>
          <select id="author_select">
            <option value="All">All</option>
          </select>
        </div>
      </div>
    </header>
    <!-- Fine header -->

    <!-- Inizio main -->
    <main>
      <div class="container">
        <div class="music_container">

        </div>
      </div>
    </main>
    <!-- Fine main -->

    <!-- Template cd Handlebars -->
    <script id="cd-template" type="text/x-handlebars-template">
      <div class="disk">
        <div class="disk-info">
          <img src=" {{poster}} " alt="{{title}}">
          <h3> {{title}} </h3>
          <span> {{author}} </span>
          <span> {{year}} </span>
        </div>
      </div>
    </script>
    <!-- Fine template cd Handlebars -->

    <!-- Template select Handlebars -->
    <script id="select-author-template" type="text/x-handlebars-template">
      <option value="{{author}}">{{author}}</option>
    </script>
    <!-- Fine template select Handlebars -->

    <!-- Script di JS con Laravel Mix -->
    <script type="text/javascript" src="dist/app.js"></script>
  </body>
</html>
