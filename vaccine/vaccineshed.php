<?php
require_once("../dbConnection/connect.php");
require_once("../vaccine/operation.php");

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
        background-color:#D4C5A3    ;
    }
    
  </style>
<body>
<h1 class="text-center my-5">Vaccination Form</h1>
<div class="container d-flex justify-content-center">
    <form action="vdisplay.php" method="post" class="w-50" enctype="multipart/form-data">
     

        <?php inputFields("Age","age","","text")?>
        <?php inputFields("Vaccine Name" ,"vaccinename","","text")?>
        <?php inputFields("Dose","vaccineroute","","text")?>
        <?php inputFields("","file","","file")?>
        <?php inputFields("Status","status","","text")?>
<button class="btn btn-dark" type="submit" name="submit">Submit</button>


    </form>
</div>
</body>


