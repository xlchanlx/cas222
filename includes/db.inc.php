<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=chansaec_cas222_db', 'chansaec_user_cas222', 'my_password09');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}

