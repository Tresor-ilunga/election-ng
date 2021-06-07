<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Base des données</title>
</head>

<body>
<?php
$bdd = new PDO('mysql:dbname=membres;host=localhost','root','') or die("connexion failed !");
?>
  </body>
</html>






