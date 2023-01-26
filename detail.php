<?php 
  $page_title = 'Ezy';
  $body_class= 'index';
  require 'head.php';


   
?>



<?php
 require 'header.php';
?>

<section class="py-5">
        <div class="container">
            <div class="row">
                <h3>Kia Stonic</h3>
                <p><span id="info-price">AUD </span> 120/day</p>
                <div class="col-md-8">
                    
                    
                    <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="assets/images/500.jpg" class="d-block w-100" alt="image">
                            </div>

                            <div class="carousel-item">
                                <img src="assets/images/500.jpg" class="d-block w-100" alt="image">
                            </div>
                        
                    
                        </div>
                    
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>

                <div class="col-md-4">
                        <h3>Vehicle Booking</h3>
                        <form action="">
                            <div class="form-group py-2">
                                <label for="">From</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group py-2">
                                <label for="">To</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" >Go to Book</button>
                            </div>
                        </form>
                        <!-- <button class="btn btn-warning" style="color: #fff;">Already Booked</button> -->

               </div>
            </div>



            <div class="row py-5">
            <h3>Vehicle Overview</h3>
                <div class="property_content">
                    
                    
                    <table class="table table-borderless">
                        <tr><th>Modal</th> <td class="text-center"> Carnival</td> <th class=""> Make</th> <td class="text-center"> 2018</td></tr>
                        <tr><th>Color</th> <td class="text-center"> Black</td> <th>Space</th> <td class="text-center"> 5 Seats</td> </tr>
                        <tr><th>Transmission</th> <td class="text-center"> Automatic</td> <th>Space</th> <td class="text-center"> 2 small bags</td> </tr>
                    </table>

                    

                </div>
            </div>


           
        </div>
    </section>

