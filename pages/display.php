<?php
require_once("../dbConnection/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
  <link rel="icon" type="image/png" href="../assets/img/1.png">
    <title>SG Farms</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
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
    <div class="container">
    <button class="btn btn-primary my-5"><a href="inventory.php" class="text-light">
            Back To Inventory</a></button>
        <button class="btn btn-primary my-5"><a href="batchflockrecord.php" class="text-light">
            Add User</a></button>
            

            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LotNo#</th>
      <th scope="col">No.of Hens</th>
      <th scope="col">Unit Weight</th>
      <th scope="col">Total Weight</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


  <?php
    $sql="SELECT * FROM batchflockrecord";
    $result=mysqli_query($con,$sql);
    $number=1;
   if($result){
        while($row=mysqli_fetch_assoc($result)){
          $ID =$row['ID'];
          $LotNo =$row['LotNo'];
          $NumberofHens=$row['NoofHens'];
          $UnitWeight=$row['UnitWeight'];
          $TotalWeight=$row['TotalWeight'];

        echo '<tr>
          
          <th scope="row"> '. $number.' </th>
          <td> '.$LotNo.' </td>
          <td> '.$NumberofHens.' </td>
          <td> '.$UnitWeight.' </td>
          <td> '.$TotalWeight.' </td>
          <td>
          <button class="btn btn-primary"><a href="update.php? updateid='.$ID.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteLot='.$ID.'" class="text-light">Delete</a></button>
 </td>
    </tr>';
     $number++;

  

}
   }
  
   ?>
    
 
  </tbody>
</table>

</div>
</body>    
</html>