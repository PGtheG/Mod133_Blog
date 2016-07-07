<?php
  include("dbconnect.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Welcome</title>
  </head>
  <body>
    <h1>Registrierung abgeschlossen</h1>

    <?php
      $Username = htmlspecialchars($_POST["Username"]);
      $Vorname = htmlspecialchars($_POST["Vorname"]);
      $Nachname = htmlspecialchars($_POST["Nachname"]);
      $Strasse = htmlspecialchars($_POST["Strasse"]);
      $PLZ = htmlspecialchars($_POST["PLZ"]);
      $Ort = htmlspecialchars($_POST["Ort"]);
      $Email = htmlspecialchars($_POST["Email"]);
      $Passwort = htmlspecialchars($_POST["Passwort"]);

      $eintrag = "INSERT INTO User (`Username`, `Vorname`, `Nachname`, `Strasse`, `PLZ`, `Ort`, `Email`, `Passwort`)
                  VALUES ('$Username', '$Vorname', '$Nachname', '$Strasse', '$PLZ', '$Ort', '$Email', '$Passwort')";

      $eintragen = mysqli_query($db, $eintrag);
      $db->close();
     ?>

     <div class="alert alert-success" role="alert">
       <p>
         Very nice! Welcome to the Blog! Go back to the <a href="login.php">Login Site</a>
       </p>
     </div>
  </body>
</html>
