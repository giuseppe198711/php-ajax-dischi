<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php ajax dischi</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">

  </head>
  <body>
    <!-- intestazione -->
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="">
        </div>
      </div>
    </header>
    <!-- /intestazione -->
    <!-- corpo -->
    <main>
      <div class="container">

      </div>
    </main>
    <!-- corpo -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="container-main">
        <img class="album-img" src="{{{poster}}}" alt="copertina">
        <h3>{{title}}</h3>
        <h4>{{author}}</h4>
        <h4>{{year}}</h4>
      </div>
    </script>
   <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
