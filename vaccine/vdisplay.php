<?php
require_once("../dbConnection/connect.php");


//require_once("../vaccine\operation.php");

if(isset($_POST['submit'])){
//    $id =$_POST['id'];
    $age=$_POST['age'];
    $vaccine=$_POST['vaccinename'];
    $dose=$_POST['vaccineroute'];
    $image=$_FILES['file'];
    echo $image['name'];;

    // echo $age;
    echo "<br>";
    // echo $vaccine;
    echo "<br>";
    // echo $dose;
    echo "<br>";

// print_r($image) ;
echo "<br>";

$imagefilename=$image['name'];
// print_r($imagefilename);
echo "<br>";
$imagefileerror=$image['error'];
// print_r($imagefileerror);
echo "<br>";
$imagefiletemp=$image['tmp_name'];

echo $image['tmp_name'];
// print_r(($imagefiletemp));
echo "<br>";

$filename_seperate=explode('/',$imagefilename);
// $filename_seperate=explode('',$filename_seperate);

echo $imagefilename;
 
$file_extension=strtolower(end($filename_seperate));
// print_r($file_extension);

// $extension=array('jpeg','jpg','png');
// if(in_array($file_extension,$extension)){
  
    $upload_image='./images/'.$imagefilename;
 
   
    move_uploaded_file($imagefiletemp,$upload_image);


    $sql="insert into vaccinedshed(age,vaccinename,vaccineroute,image) 
    values('$age','$vaccine','$dose','$upload_image')";

    $result=mysqli_query($con,$sql);
    if($result){
     //  echo"Connected Sucess";
       header('location:vdisplay.php');
    }else{
        die(mysqli_error($con));
    }
    // }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="1" sizes="76x76" href="../assets/img/1.png">
  <link rel="icon" type="image/png" href="../assets/img/1.png">
    <title>SG Farms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  

    <style>
    body{
        background-color:#EDE8DD   ;
    }
    
  </style>
</head>
<body>
<button class="btn btn-light"  name="submit"><a href="..\vaccine\vaccineshed.php">Add New Vaccine</a></button>
<button class="btn btn-warning"  name="submit"><a href="../pages/inventory.php">Back To Inventory</a></button>
<h1 class="text-center my-4">Display Vaccination Data</h1>

<div class="container mt-5 d-flex justify--content-center">
    
<table class="table table-striped">
    
  <thead class="table-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Age</th>
      <th scope="col">Vaccine</th>
      <th scope="col">Route</th>
      <th scope="col">Vaccine Image</th>
      <th scope="col">Status</th>
    </tr>
  </thead >
  <tbody>
    
    <?php

    $sql="SELECT * from  vaccinedshed";
    $result=mysqli_query($con,$sql);
    $number=1;
    while($row=mysqli_fetch_assoc($result))
    {
$id=$row['id'];
$age=$row['age'];
    $vaccine=$row['vaccinename'];
    $dose=$row['vaccineroute'];
    $image=$row['image'];
    $status=$row['status'];

    echo '<tr>
    <td>'.$number.'</td>
    <td>'.$age.'</td>
    <td>'.$vaccine.'</td>
    <td>'.$dose.'</td>
    <td><img src='.$image.'></td>
    
   

    </tr>';
    $number++;
    
    }
    
  
    ?>

</div>
</body>
</html>