<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 <div class="container-fluid">
   <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Registrierung</h3>
      </div>

      <div class="panel-body">
        <p>
          Bitte fülle alle Felder korrekt aus, um dich zu registrieren.
        </p>
        
        <form class="form" action="successful.php" method="post">

          <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" name="Username" id="Username">
          </div>

            <div class="form-group">
              <label for="Vorname">Vorname</label>
              <input type="text" class="form-control" name="Vorname" id="Vorname">
            </div>

            <div class="form-group">
              <label for="Nachname">Nachname</label>
              <input type="text" class="form-control" name="Nachname" id="Nachname">
            </div>

            <div class="form-group">
              <label for="Strasse">Strasse</label>
              <input type="text" class="form-control" name="Strasse" id="Strasse">
            </div>

            <div class="form-group">
              <label for="PLZ">PLZ</label>
              <input type="number" class="form-control" name="PLZ" id="PLZ">
            </div>

            <div class="form-group">
              <label for="Ort">Ort</label>
              <input type="text" class="form-control" name="Ort" id="Ort">
            </div>

            <div class="form-group">
              <label for="Email">Email</label>
             <input type="email" class="form-control" name="Email" id="Email">
            </div>

            <div class="form-group">
              <label for="Password">Passwort</label>
              <input type="password" class="form-control" name="Passwort" id="Passwort">
            </div>
            <button type="submit" class="btn btn-primary" name="button" id="button">Registrierung</button>

          </form>
        </div>

      <div class="panel-footer">
        <p>
          Blog is made with Love
        </p>
      </div>
   </div>

 </body>
 </html>
