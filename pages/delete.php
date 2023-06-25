<?php
require_once("../dbConnection/connect.php");

if(isset($_GET['deleteLot'])){
    $ID=$_GET['deleteLot'];

    $sql="delete from batchflockrecord where ID='$ID'";
    $result=mysqli_query($con,$sql);
    if($result){
//echo "Success";
       header('location:display.php');

    }else{
        die("Connection Failed: " .$con->connect_error);
    }
}


?>
