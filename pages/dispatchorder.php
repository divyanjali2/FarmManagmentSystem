<?php


require_once("../dbConnection/connect.php");

if(isset($_POST['submit'])){
  $iD =$_POST['id'];
    $orderNum =$_POST['ordernum'];
    $orderName=$_POST['salesorder'];
    $orderDate=$_POST['orderdate'];

    $sql="insert into dispatchorder(id,ordernum,salesorder,orderdate) 
    values('$iD','$orderNum','$orderName','$orderDate')";

    $result=mysqli_query($con,$sql);
    
    if($result){
        echo"Connected Sucess";
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
  </head>
  <body>
<div class="container my-5">
<form method="post">

  <div class="form-group">
    <label>ID Number</label>
    <input type="text" class="form-control"  placeholder="Enter ID Number" name="id" autocomplete="off">
    
  </div>
 
<div class="form-group">
    <label>Order Number</label>
    <input type="text" class="form-control"  placeholder="Enter Number of Orders" name="ordernum" autocomplete="off"> 
</div>
<div class="form-group">
    <label>Order Name</label>
    <input type="text" class="form-control"  placeholder="Enter Order Name" name="salesorder" autocomplete="off">



</div>
<div>
    <label>Order Date</label>
    <input type="date" class="form-control"  placeholder="Order Date" name="orderdate" autocomplete="off">
</div>
  
 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
</div>


  </body>
</html>