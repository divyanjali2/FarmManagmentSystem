<?php

require_once("../dbConnection/connect.php");
header("Content-Type:application/json");


if(TRUE){
    // $user_id=$_POST['updateid'];

    $sql="Select * from vaccine where Id=11";
    $result=mysqli_query($con,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){
        $response=$row;

    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid";
}

//update query
if(isset($_POST['hiddendata'])){
    $uniqueid=$_POST['hiddendata'];


    $NoofHens=$_POST['updateNumberofHens'];
    $Age=$_POST['updateAge'];
    $Vacccine=$_POST['updateVacccine'];
    $Dose=$_POST['updateDose'];
    $Route=$_POST['updateRoute'];
    $Vaccined=$_POST['updateVaccined'];

    $sql="update vaccine set NoofHens='$NoofHens',Age='$Age',Vacccine='$Vacccine',Dose='$Dose'
    ,Route='$Route',Vaccined='$Vaccined' where id=$uniqueid";

    $result=mysqli_query($con,$sql);

    
}


?>