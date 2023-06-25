<?php

require_once("../dbConnection/connect.php");

if(isset($_POST['displaySend'])){
    $table='<table class="table">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
        <th scope="col">No.Of Hens</th>
        <th scope="col">Age</th>
        <th scope="col">Vaccine</th>
        <th scope="col">Dose</th>
        <th scope="col">Route</th>
        <th scope="col">Vaccined</th>
       
        <th scope="col">Status</th>
      </tr>
    </thead>';

    $sql="SELECT * FROM vaccine";
    $result=mysqli_query($con,$sql);
    $number=1;
    while($row=mysqli_fetch_assoc($result)){
        
        $ID=$row['ID'];
        $NoofHens=$row['NoofHens'];
        $Age=$row['Age'];
        $Vacccine=$row['Vacccine'];
        $Dose=$row['Dose'];
        $Route=$row['Route'];
        $Vaccined=$row['Vaccined'];

        $table.='<tr>
        <td scope="row">'.$number.'</td>
        <td>'.$NoofHens.'</td>
        <td>'.$Age.'</td>
        <td>'.$Vacccine.'</td>
        <td>'.$Dose.'</td>
        <td>'.$Route.'</td>
        <td>'.$Vaccined.'</td>
        <td>
        <button class="btn btn-dark" onclick="GetDetails('.$ID.')">Update</button>
        <button class="btn btn-danger" onclick="DeleteUser('.$ID.')">Delete</button>
        </td>
      </tr>';
      $number++;
    }
    $table.='</table>';
    echo $table;
}


?>
