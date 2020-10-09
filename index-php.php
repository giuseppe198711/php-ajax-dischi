<?php include "db.php"; ?>

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
        <?php if(!empty($database)) {?>
        <div class="cds">
          <?php foreach ($database as $cd) { ?>
            <div class="cd">
              <div class="cd-poster">
                <img src="<?php echo $cd["poster"] ?>">
              </div>
              <h3 class="cd-title"><?php echo $cd["title"] ?></h3>
              <div class="cd-author"><?php echo $cd["author"] ?></div>
              <div class="cd-year"><?php echo $cd["year"] ?></div>
            </div>
          <?php } ?>
      <?php } else { ?>
        </div>
        <h2 class="alert">Non ci sono CD</h2>
      <?php } ?>


      </div>

    </main>
    <!-- corpo -->

   <script src="dist/app.css" charset="utf-8"></script>
  </body>
</html>
