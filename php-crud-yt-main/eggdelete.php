<?php
require_once("../dbConnection/connect.php");
$id = $_GET["id"];
$sql = "DELETE FROM eggproduction WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($result) {
  header("Location: eggindex.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}
