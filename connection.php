<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
try 
{
    $dbh = new PDO("mysql:host=$hostname;dbname=flowers1", $username, $password);
} catch (PDOException $ex) 
{
    echo $ex->getMessage();
}
?>