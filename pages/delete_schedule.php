<?php 

require_once("../dbConnection/connect.php");

if(!isset($_GET['id'])){
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    $con->close();
    exit;
}

$delete = $con->query("DELETE FROM `table48` where id = '{$_GET['id']}'");
if($delete){
    echo "<script> alert('Event has deleted successfully.'); location.replace('./calender.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$con->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$con->close();

?>