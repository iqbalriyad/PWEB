<?php session_start(); if( !isset($_SESSION["login"]) ) { header("Location: login.php"); exit; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kuis PWEB</title>
</head>
    <body>
        <h1>Silahkan Login</h1>
        <br>
        <a href="logout.php" type="button">Logout</a>
        <br><br>
    </body>
</html>