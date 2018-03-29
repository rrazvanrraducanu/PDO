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
    /*** The SQL SELECT statement ***/
    $sql = "SELECT * FROM flowers";
    foreach ($dbh->query($sql) as $row)
    {
        print $row["nume"] ." - ".$row["culoare"]." - ".$row["marime"]." - ".$row["pret"]." - "."<br/>";
        }
    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
<br/><br/>
<a href="test.php">Test PDO driver</a> <br/><br/>
<a href="insert.php">Insert record</a> <br/><br/>
<a href="update.php">Update record</a><br/><br/>
<a href="transaction.php">Transaction</a><br/><br/>
<a href="last_id.php">Last insert id</a><br/><br/>