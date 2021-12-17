d<?php

$servername = "localhost";
$username = "root";
$password = "seukbfvgzxpoqa4m9s";
$dbname = "daw_pro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connection filed" . mysql_connect_error());
}

#$username = 'root';
#$password = 'seukbfvgzxpoqa4m9s';
#$dsn = 'mysql: host = localhost; dbname = daw_pro';

#try {

 # $conn = new PDO($dsn, $username, $password);
#  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

#} catch (PDOException $e) {

 # echo "Fail to connect to the database ".$e->getMessage();

#}

?>
