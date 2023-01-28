

<?php 

session_start();
if(!isset($_SESSION['admin'])){
  header('location: login.php');

}


  $page_title = 'Administration';
  $body_class= 'index';
  require 'head.php';
   

?>

<?php
 require 'header.php';
?>




<section class="py-5">
    <div class="container">
        <div class="row">

        <p class="text-center" style="font-size: 30px; font-weight: 600;">Add Vehicle</p>

            <form class="row g-3" method="post" id='myform' enctype="multipart/form-data" novalidate>
                        

                        <div class="col-md-6">
                        <label for="city" class="form-label" id="label-title"> <span style="color: red;"></span>Name or Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Kia Stonic" required>
                        </div>

                        <div class="col-md-6">
                        <label for="modal" class="form-label" id="label-modal">Modal</label>
                        <input type="text" class="form-control" name="modal" id="modal" placeholder="Carnival" >
                        </div>

                        <div class="col-md-6">
                        <label for="price" class="form-label" id="label-price"> <span style="color: red;"></span> AUD per day</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="150" required>
                        </div>

                        <div class="col-md-6">
                        <label for="price" class="form-label" id="label-price"> <span style="color: red;"></span> Color</label>
                        <input type="text" class="form-control" name="color" id="color" placeholder="Black" required>
                        </div>

                        <div class="col-md-6">
                        <label for="seat" class="form-label" id="label-seat"> <span style="color: red;"></span> Number of Seats</label>
                        <input type="text" class="form-control" name="seat" id="seat" placeholder="4 Seats" required>
                        </div>

                        <div class="col-md-6">
                        <label for="build" class="form-label" id="label-build"><span style="color: red;"></span> Build in</label>
                        <input type="number" class="form-control" name="build" id="build" placeholder="2020" required>
                        </div>

                        <div class="col-md-6">
                        <label for="transmission" class="form-label" id="label-transmission"> Transmission</label>
                        <input type="text" class="form-control" name="transmission" id="transmission" placeholder="Automatic or Manual" >
                        </div>

                        <div class="col-md-6">
                        <label for="bag" class="form-label" id="label-droom">Space for Bags	</label>
                        <input type="text" class="form-control" name="bag" id="bag" placeholder="2 Small bags" >
                        </div>


                        <div class="col-md-6">
                        <label for="files" class="form-label" id="label-files">Select Multiple Photos</label>
                        <input type="file" class="form-control" id="files" name="files[]" accept="image/*" multiple >
                        </div>

                                            
                   
                    <div class="col-12 text-end">
                      <button type="submit" class="btn btn-success">Add Car</button>
                    </div>

                    </form>

        </div>

    </div>

</section>


<script>
  $("form#myform").submit(function(e){
var formData = $(this).serialize();
e.preventDefault();
// e.stopPropagation();

var form_data = new FormData(this);

let title = $("#title").val();
let modal = $("#modal").val();
let price = $("#price").val();
let seat = $("#seat").val();
let build = $("#build").val();
let transmission = $("#transmission").val();
let bag = $("#bag").val();
let picture = $("#files").val();

if(title ==""){
    alert('Title required');
}else{
    if(modal ==""){
    alert('Modal required');
}else{

    if(price ==""){
    alert('Price required!');
}else{

    if(seat==""){
        alert('seat required');
    }else{
      if(build==""){
        alert("Build in required!");
      }else{
        if(transmission==""){
        alert("transmission  required!");

        }else{
          if(bag==""){
        alert("bag  required!");
        }else{
          if(picture==""){
        alert("At least 1 picture required!");
        }else{

          if(color==""){
        alert("Color required!");

          }else{

            // ajax


var fdata = new FormData(this);
    var url = 'include/add-vehicle.php';

$.ajax({
type: "POST",
url: url,
data: fdata,
contentType: false,
processData: false,
cache: false

}).done(function(response){
    // let res = JSON.parse(JSON.stringify(response));
    let res= JSON.parse(response);

    // console.log(res.success);
     if(res.statusCode==200){
        $('#myform').trigger("reset");

        alert('Added Successfully!');

     }else{
        alert('failed!');
     }
});










          // 

          }


        }
        }
        }
      }

    }

    




}
}

}





});













</script>
