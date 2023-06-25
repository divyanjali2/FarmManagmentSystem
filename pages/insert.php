<?php

require_once("../dbConnection/connect.php");

extract($_POST);

if(isset($_POST['NumberofHensSend']) && isset($_POST['AgeSend'])
&& isset($_POST['VaccineSend']) && isset($_POST['DoseSend'])
&& isset($_POST['RouteSend']) && isset($_POST['VaccinedSend']))

{
    $sql="insert into vaccine(NoofHens,Age,Vacccine,Dose,Route,Vaccined)
    values('$NumberofHensSend','$AgeSend','$VaccineSend','$DoseSend','$RouteSend','$VaccinedSend')";


    $result=mysqli_query($con,$sql);
    
   
   
}

?>
