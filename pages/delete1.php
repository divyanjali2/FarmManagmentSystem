<?php

require_once("../dbConnection/connect.php");

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];

    $sql="delete from vaccine where ID=$unique";
    $result=mysqli_query($con,$sql);

}






?>