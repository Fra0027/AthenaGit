<!DOCTYPE html>
<html lang="en" dir="ltr">

            <!-- Qui secondo me dobbiamo fare un controllo , non lo so fare ma tipo
           <?php
            /*   if($_SESSION["logged"] = true;)
              {
                Allora puoi procedere con questo sito
              } */
             ?>
             Perché senno possono semplicemente digitare nell'url il nome del codice aggiungi e lo fanno senza essere loggati
             Capì? -->

  <head>
    <meta charset="utf-8">

    <title>Athena</title>

    <link rel="stylesheet" href="css/CSSReset.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </head>
  <body>
    <header>
      <img src="images/logo.jpg" alt="Imglogo" class="imglogo">
      <div class="dropdown">
        <button class="dropbtn">User</button>
        <div class="dropdown-content">
          <a href="aggiungi.php">Aggiungi Post</a>
          <a href="#">Modifica Post</a>
          <hr>
          <a href="#">Log Out</a>
        </div>
      </div>

    </header>
    <div class="box">
      <br><br><br><br><br><br><br><br><br> Ndo cazzo sta sto box
      <form action="" method="post">
        Inserire url immagine <br>
        <input type="text" name="foto" placeholder="Url foto" /> <br>
        Inserire un titolo <br>
        <input type="text" name="titolo" placeholder="Titolo" /> <br>
        Inserire un sottotitolo <br>
        <input type="text" name="stitolo" placeholder="Sotto titolo" /> <br>
        Inserire il post <br>
        <textarea name="post" placeholder="Post" /></textarea> <br>
        <input type="submit" value="Pubblica" /> <br>
      </form>
    </div>
    <main>

    </main>

    <footer>

    </footer>

  </body>
</html>
