<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "login_signup";

$conn = mysqli_connect($server,$username,$password,$dbname);

if ($conn == false) {
    die("Failed To Establish Connection With The Database".mysqli_connect_error());
}
else{
    return $conn;
}
?>