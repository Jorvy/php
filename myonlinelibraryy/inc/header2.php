<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <div class="header">

      <div class="wrapper">

        <h1 class="branding-title"><a href="/">My Online Library</a></h1>

        <ul class="nav">
          <li class="books<?php if ($section == "books") {echo " on"; } ?>" <a href="catalog.php?cat=books">Books</a></li>

            <li class="movies<?php if ($section == "movies") {echo " on"; } ?>" <a href="catalog.php?cat=movies">Movies</a></li>

              <li class="books<?php if ($section == "music") {echo " on"; } ?>"  <a href="catalog.php?cat=music">Music</a></li>

                <li class="suggest<?php if ($section == "suggest") {echo " on"; } ?>" <a href="catalog.php?cat=suggest">Suggest</a></li>

                </ul>

              </div>

            </div>
            <div id="content">


  </body>
</html>
