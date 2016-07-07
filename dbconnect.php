<?php
$db = mysqli_connect("localhost", "blog", "geheim", "Blog");
if (!$db) {
  exit("Verbindungsfehler: " . mysqli_connect_error());
}
 ?>
