<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=list_movies','list_movies','ola');
    echo "OK";
}
catch(PDOException $e)
{
    echo "The error ".$e -> getMessage();
}