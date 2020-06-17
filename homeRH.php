<?php
session_start();
if (!isset($_SESSION ['name'])){
    header ('location:login.php');    
}
if (isset($_POST['déconnexion'])){
    header ('location:login.php');
    unset($_SESSION ['name']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <button>mouhssine</button>
    <a href="resultatrh.php">resultat</a>
    <input type="submit" name="déconnexion" value="déconnexion">
    </form>
</body>
</html>