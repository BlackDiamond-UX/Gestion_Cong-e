<?php
include("connect.php");
session_start();
if (!isset($_SESSION ['name'])){
    header ('location:login.php');    
}
if (isset($_POST['déconnecté'])){
  unset($_SESSION ['name']);
  header ('location:login.php');
}
if(isset($_POST['submit'])){
    header("Location:formulaire.php");
}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style-horloge.css">
    <title>LoginIn</title>
</head>
<body>
    <form action="" method="POST">
        <button type=submit name="submit1">solde de congé</button>
         <button type=submit name="submit">demande de congé</button>
         <button type=submit name="déconnecté">déconnecté</button>
    </form>
</body>

</html>