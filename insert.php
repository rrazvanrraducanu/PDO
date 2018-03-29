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
    /*** INSERT data ***/
    $count = $dbh->exec("INSERT INTO flowers(nume, culoare, marime, pret) VALUES ('trandafiri', 'rosii','mari','30')");
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
