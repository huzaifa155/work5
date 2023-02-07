<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "m.huzaifa";

$conn = mysqli_connect($server,$username,$password,$dbname);
if ($conn == false) {
    die("Failed to establish connection with the database".mysqli_connect_error());
}else{
    return $conn;
}
?>