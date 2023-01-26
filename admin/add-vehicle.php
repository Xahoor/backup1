

<?php 
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
                        <label for="city" class="form-label" id="label-title"> <span style="color: red;">*</span>Name or Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Kia Stonic" required>
                        </div>

                        <div class="col-md-6">
                        <label for="modal" class="form-label" id="label-modal">Modal</label>
                        <input type="text" class="form-control" name="modal" id="modal" placeholder="Carnival" >
                        </div>

                        <div class="col-md-6">
                        <label for="price" class="form-label" id="label-price"> <span style="color: red;">*</span> AUD per day</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="150" required>
                        </div>

                        <div class="col-md-6">
                        <label for="seat" class="form-label" id="label-seat"> <span style="color: red;">*</span> Number of Seats</label>
                        <input type="text" class="form-control" name="seat" id="seat" placeholder="4 Seats" required>
                        </div>

                        <div class="col-md-6">
                        <label for="build" class="form-label" id="label-build"><span style="color: red;">*</span> Build in</label>
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

