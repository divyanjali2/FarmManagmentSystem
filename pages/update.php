<?php
require_once("../dbConnection/connect.php");

$ID=$_GET['updateid'];
$sql="select * from batchflockrecord where ID='$ID'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

    $ID=$row['ID'];
    $LotNo=$row['LotNo'];
    $NumberofHens=$row['NoofHens'];
    $UnitWeight=$row['UnitWeight'];
    $TotalWeight=$row['TotalWeight'];

if(isset($_POST['submit'])){
     //if post method is submit can access all the variables
     $ID=$row['ID'];
    $LotNo=$_POST['LotNo'];
    $NumberofHens=$_POST['NoofHens'];
    $UnitWeight=$_POST['UnitWeight'];
    $TotalWeight=$_POST['TotalWeight'];

    $sql="update batchflockrecord set ID='$ID', LotNo='$LotNo',
    NoofHens='$NumberofHens',
    UnitWeight='$UnitWeight',
    TotalWeight='$TotalWeight'where ID='$ID'";
   

    $result=mysqli_query($con,$sql);
    if($result){
     //  echo"Connected Sucess";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
     <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

  <link rel="icon" type="image/png" href="../assets/img/1.png">
    <title>SG Farms</title>
  </head>
  <body>
<div class="container my-5">
<form method="post">

  <div class="form-group">
    <label>LotNo</label>
    <input type="text" class="form-control"  placeholder="Enter Lot Number" name="LotNo" autocomplete="off" value=<?php
    echo $LotNo;?>>
    
  </div>
 
<div class="form-group">
    <label>No.of Hens</label>
    <input type="text" class="form-control"  placeholder="Enter Number of Hens" name="NoofHens" autocomplete="off" value=<?php
    echo $NumberofHens;?>>
</div>
<div class="form-group">
    <label>Unit Weight</label>
    <input type="text" class="form-control"  placeholder="Enter Unit weight per hen" name="UnitWeight" autocomplete="off" value=<?php
    echo $UnitWeight;?>>
</div>
<div class="form-group">
    <label>Total Weight</label>
    <input type="text" class="form-control"  placeholder="Total Weight" name="TotalWeight" autocomplete="off" value=<?php
    echo $TotalWeight;?>>
</div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

</div>


  </body>
</html>