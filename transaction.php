
<?php
/*** mysql hostname ***/
$hostname = 'localhost';
/*** mysql username ***/
$username = 'root';
/*** mysql password ***/
$password = '';
/*** database name ***/
$dbname = 'flori';
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';
    /*** set the PDO error mode to exception ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*** begin the transaction ***/
    $dbh->beginTransaction();
    /*** CREATE table statements ***/
    $table = "CREATE TABLE flori1 ( id MEDIUMINT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nume VARCHAR(25) NOT NULL,
    culoare VARCHAR(25) NOT NULL,
    marime VARCHAR(25) NOT NULL,
    pret VARCHAR(25) NOT NULL
    )";
    $dbh->exec($table);
 /***  INSERT statements ***/
 $dbh->exec("INSERT INTO flori1 (nume, culoare, marime, pret) VALUES ('lalele','albe','medii','10')");
 $dbh->exec("INSERT INTO flori1 (nume, culoare, marime, pret) VALUES ('albastrele', 'albastre','mici','5')");
 $dbh->exec("INSERT INTO flori1 (nume, culoare, marime, pret) VALUES ('ghiocei','albi','mici','7')");
 $dbh->exec("INSERT INTO flori1 (nume, culoare, marime, pret) VALUES ('toporasi', 'albastri','medii','15')");
 $dbh->exec("INSERT INTO flori1 (nume, culoare, marime, pret) VALUES ('garoafe', 'rosii','medii','20')");
/*** commit the transaction ***/
    $dbh->commit();
    /*** echo a message to say the database was created ***/
    echo 'Data entered successfully<br />';
}
catch(PDOException $e)
    {
    /*** roll back the transaction if we fail ***/
    $dbh->rollback();
    /*** echo the sql statement and error message ***/
    echo $e->getMessage();
    }
?>
