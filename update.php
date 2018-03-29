<?php
/*** mysql hostname ***/
$hostname = 'localhost';
/*** mysql username ***/
$username = 'root';
/*** mysql password ***/
$password = '';
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=flori", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';
    /*** UPDATE data ***/
    $count = $dbh->exec("UPDATE flowers SET nume='lalele' WHERE nume='trandafiri'");
    /*** echo the number of affected rows ***/
    echo $count;
    /*** close the database connection ***/
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
