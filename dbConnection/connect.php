<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "farm";

//create connection
$con = new mysqli($servername, $username, $password, $dbName);

//check connection
if($con->connect_error){
    die("Connection Failed: " .$con->connect_error);
}
// if($conn){
//     echo"hi";
// }
?>



