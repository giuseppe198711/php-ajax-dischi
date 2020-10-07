<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">

  </head>
  <body>

    <header>
      <div class="container">
        <img src="img/logo.png" alt="logo" />
      </div>

        <select class="genere" name="">
          <option value="">All</option>
          <option value="Jazz">Jazz</option>
          <option value="Rock">Rock</option>
          <option value="Metal">Metal</option>
          <option value="Pop">Pop</option>
        </select>
    </header>

   <div class="cds-container container">

         <?php foreach ($database as $cd) {?>
           <div class="cd">
             <img class="img-music" src="<?php echo $cd["poster"]; ?>" alt="">
             <h4><?php echo $cd["title"]; ?></h4>
             <span class="author"><?php echo $cd["author"]; ?></span>
             <span class="year"><?php echo $cd["year"]; ?></span>
           </div>
         <?php } ?>
     
   </div>


  </body>
</html>
