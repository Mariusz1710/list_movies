<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=list_movies','list_movies','ola');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo -> exec('SET names UTF8');
}
catch(PDOException $e)
{
    $error = 'The error during the connection to the database '.$e -> getMessage();
    include 'error.html.php';
    exit();
}

try
{
    $sql = "SELECT title,firstName,lastName,year FROM movies INNER JOIN directors ON movies.directorId = directors.id";
    $result = $pdo -> query($sql);

    include 'output.html.php';
}
catch(PDOException $e)
{
    $error = "The error during fetching the data from the database ".$e -> getMessage();
    include 'error.html.php';
    exit();
}