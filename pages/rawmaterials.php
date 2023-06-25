<?php
require_once("../dbConnection/connect.php");



if(isset($_POST['submit'])){
      //$ID =$_POST['ID'];
      $Item =$_POST['Item'];
      $CSLevel=$_POST['CSLevel'];
      //$WC=$_POST['WC'];
      //$Rsl=$_POST['Rsl'];
      //$GLOBALS[$CSLevel];


$sql="INSERT INTO `rawmaterials`(`Item`, `CSLevel`) VALUES ('$Item','$CSLevel')";

    $result=mysqli_query($con,$sql);
    if($result){
       //echo"Connected Success";
      // header('location:displayraw1.php');
    }else{
        die(mysqli_error($con));

    }
    // $weekly = $CSLevel * 7;
    // echo 'Weekly Consumption .</br>';
    // echo $weekly.'</br>';

    /*$remain = $CSLevel - $weekly;
    echo '</br>.Remaining Stock Level .</br>';
    echo $weekly.'</br>';*/
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
    

  <link rel="icon" type="image/png" href="../assets/img/1.png">
    <title>SG Farms</title>
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
<style>
    body{
        background-color: #e9ffa8;
    }
    .text{
        width: 100%;
    border: 1px solid brown;
    border-radius: 05px;
    box-shadow: 1px 1px 2px 1px grey;
    padding: 10px 15px 10px 15px;
    }
  select{
    width: 100%;
    border: 1px solid brown;
    border-radius: 05px;
    box-shadow: 1px 1px 2px 1px grey;
    padding: 10px 15px 10px 15px;
  }
  </style>
  </head>
  <body>
  <div class="container my-5">

<button type="submit" class="btn btn-primary" name="submit"><a href="currentstocklevel.php">Back To Raw Materials</a></button>
  <div class="container my-3">
    <h1 class="text-center">Raw Material Details</h1>
</div>
    
  <div class="container my-5">
<form action = "" method="post">

  <div class="form-group">


    <label>Item Name </label> <br>
    <select name = "Item">
        <option value = "item">Select Item</option>
        <option value = "barley">Barley</option>
        <option value = "wheat">Wheat</option>
        <option value = "chick starter">Chick Starter</option>
        <option value = "grower">Grower</option>
    
</select> 
    
  </div> 
 
<div class="form-group">
    <label>Current Stock Level</label>
    <input type="string type" class="form-control"  placeholder="Stock Level" name="CSLevel" autocomplete="off"> 
</div>
<!--div class="form-group">
    <label>Weekly Consumption</label>
    <input type="text" class="form-control"  placeholder="Weekly Consumption" name="WC" autocomplete="off">



</div>
<div>
    <label>Remaining Stock Level</label>
    <input type="text" class="form-control"  placeholder="Remaining" name="Rsl" autocomplete="off">
</div> <br>-->
  
 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
 
</form>
<?php
if(isset($_POST['submit'])){
      //$ID =$_POST['ID'];
      $Item =$_POST['Item'];
      $CSLevel=$_POST['CSLevel'];
      //$WC=$_POST['WC'];
      //$Rsl=$_POST['Rsl'];
      //$GLOBALS[$CSLevel];

    $sql="INSERT INTO `rawmaterials`(`Item`, `CSLevel`) VALUES ('$Item','$CSLevel')";

    $result=mysqli_query($con,$sql);
    if($result){
       
       //header('location:display.php');
    }else{
        die(mysqli_error($con));

    }
    $weekly = $CSLevel * 7;
    echo '<h2  class="d-flex justify-content-center">Weekly Consumption</h2> .</br>';
    echo '<h2 class="d-flex justify-content-center">'.$weekly.'</h2></br>';

    /*$remain = $CSLevel - $weekly;
    echo '</br>.Remaining Stock Level .</br>';
    echo $weekly.'</br>';*/
  }
?>

</div>
</div>
<div>

  </body>
</html>