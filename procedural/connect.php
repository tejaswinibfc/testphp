<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {

    echo '<script>alert("Connnection successfull")</script>';

}
