
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
    /*** set the error reporting attribute ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*** INSERT a new row ***/
    $dbh->exec("INSERT INTO flori1(nume, culoare, marime, pret) VALUES ('trandafiri', 'albi','medii','20')");
    /*** display the id of the last INSERT ***/
    echo $dbh->lastInsertId();
    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
