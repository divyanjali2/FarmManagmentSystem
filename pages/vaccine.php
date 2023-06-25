<?php

require_once("../dbConnection/connect.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    
</head>
<body>


<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Vaccine Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
  <div class="form body">
    <label for="completeNumberofHens" class="form-label">Number of Hens</label>
    <input type="number" class="form-control" id="completeNumberofHens"  
    placeholder="Enter Number of Hens">
   
  </div>
  <div class="form body">
    <label for="completeAge" class="form-label">Age</label>
    <input type="text" class="form-control" id="completeAge"  
    placeholder="Enter Age">
   </div>
   <div class="form body">
    <label for="completeVaccine" class="form-label">Vaccine</label>
    <input type="text" class="form-control" id="completeVaccine"  
    placeholder="Enter Vaccine Name">
   </div>
  <div class="form body">
    <label for="completeDose" class="form-label">Dose</label>
    <input type="text" class="form-control" id="completeDose"  
    placeholder="Enter Dose">
   </div>
  <div class="form body">
    <label for="completeRoute" class="form-label">Route</label>
    <input type="text" class="form-control" id="completeRoute"  
    placeholder="Enter Route">
   </div>
  <div class="form body">
    <label for="completeVaccined" class="form-label">Vaccined</label>
    <input type="text" class="form-control" id="completeVaccined"  
    placeholder="Enter Number of Vaccined Hens">
   </div>
</div>
<div class="modal-footer">
      <button type="button" class="btn btn-dark my-6" onclick="adduser()">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
  <div class="form body">
    <label for="updateNumberofHens" class="form-label">Number of Hens</label>
    <input type="number" class="form-control" id="updateNumberofHens"  
    placeholder="Enter Number of Hens">
   
  </div>
  <div class="form body">
    <label for="updateAge" class="form-label">Age</label>
    <input type="string" class="form-control" id="updateAge"  
    placeholder="Enter Age">
   </div>
   <div class="form body">
    <label for="updateVaccine" class="form-label">Vaccine</label>
    <input type="string" class="form-control" id="updateVaccine"  
    placeholder="Enter Vaccine Name">
   </div>
  <div class="form body">
    <label for="updateDose" class="form-label">Dose</label>
    <input type="string" class="form-control" id="updateDose"  
    placeholder="Enter Dose">
   </div>
  <div class="form body">
    <label for="updateRoute" class="form-label">Route</label>
    <input type="string" class="form-control" id="updateRoute"  
    placeholder="Enter Route">
   </div>
  <div class="form body">
    <label for="updateVaccined" class="form-label">Vaccined</label>
    <input type="number" class="form-control" id="updateVaccined"  
    placeholder="Enter Number of Vaccined Hens">
   </div>
</div>
<div class="modal-footer">
      <button type="button" class="btn btn-dark my-6" onclick="updatedetails()">Update</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
<input type="hidden" id="hiddendata">
      </div>
    </div>
  </div>
</div>




<div class="container my-3">
    <h1 class="text-center">Vaccination Schedule</h1>
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
Add New Users
</button>
<div id="displayDataTable"></div>
</div>














<!--boostrap javascript <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>


<script>

$(document).ready(function(){
    displayData();
});






function displayData(){
    var displayData="true";
    $.ajax({
        url:"display1.php",
        type:'post',
        data:{
    displaySend:displayData
},
success:function(data,status){

    $('#displayDataTable').html(data);
}
    })
}

    function adduser(){
        var NumberofHensAdd=$('#completeNumberofHens').val()
        var AgeAdd=$('#completeAge').val()
        var VaccineAdd=$('#completeVaccine').val()
        var DoseAdd=$('#completeDose').val()
        var RouteAdd=$('#completeRoute').val()
        var VaccinedAdd=$('#completeVaccined').val()
        
        $.ajax({
            url:"insert.php",
            type:'post',
            data:{
                //whatever data got from function adduser stored here
                NumberofHensSend:NumberofHensAdd,
                AgeSend:AgeAdd,
                VaccineSend:VaccineAdd,
                DoseSend:DoseAdd,
                RouteSend:RouteAdd,
                VaccinedSend:VaccinedAdd
            },
            success:function(data,status){
                //function to display data
              //  console.log(status);
              $('completeModal').modal('hide');
              displayData();
            }
        });

    }
    //DELETE RECORD

    function DeleteUser(deleteid){
        $.ajax({
            url:"delete1.php",
            type:'post',
            data:{
                deletesend:deleteid
            },
            success:function(data,status){
                //function to display data
              //  console.log(status);
              displayData();
            }
        });
    }

////UPDATE RECORD
function GetDetails(updateid){
    $('#hiddendata').val(updateid);

    $.post("update1.php",{updateid:updateid},function(data,status){
        var userid=JSON.parse(data);  //how to pass data using js object
        $('#updateNumberofHens').val(user_id.NumberofHens);
        $('#updateAge').val(user_id.ID);
        $('#updateVacccine').val(user_id.Vacccine);
        $('#updateDose').val(user_id.Dose);
        $('#updateRoute').val(user_id.Route);
        $('#updateVaccined').val(user_id.Vaccined);

    });


       $('#updatemodal').modal("show");
            }


    function updatedetails(){
    var updateNumberofHens=$('#updateNumberofHens').val();
    var updateAge=$('#updateAge').val();
    var updateVacccine=$('#updateVacccine').val();
    var updateDose=$('#updateDose').val();
    var updateRoute=$('#updateRoute').val();
    var updateVaccined=$('#updateVaccined').val();
    var hiddendata=$('#hiddendata').val();

    $.post("update1.php",{
        updateNumberofHens:updateNumberofHens,
        updateAge:updateAge,
        updateVacccine:updateVacccine,
        updateDose:updateDose,
        updateRoute:updateRoute,
        updateVaccined:updateVaccined,
        hiddendata:hiddendata
    },function(data,status){
$('updatemodal').modal('hide');
displayData();
    });

        
    }
     
    </script>
</body>
</html>