
<?php 
$page_title = 'Administration';
$body_class= 'index';
require 'head.php';
 
?>

<style>
    #carouselExampleControls1 {
    position: relative;
}

.book{
    position: absolute;
    top: 0%;
    left: 0%;
    text-decoration: none;
    background: #ffc1079c;
    padding: 10px 20px;
    color: #fff;


}
</style>
<?php
require 'header.php';
?>


<section class="py-5">
    <p class="text-center" style="font-size: 30px; font-weight: 600;">Vehicle Booking History</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                



                <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                <!-- <button class="btn btn-warning">Booked</button> -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="../assets/images/500.jpg" class="d-block w-100" alt="image">
                                </div>

                                <div class="carousel-item">
                                    <img src="../assets/images/500.jpg" class="d-block w-100" alt="image">
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
                            <span class="book">Booked</span>

                </div>
                <div class="content">
                    <p style="font-size: 25px;">Kia Stonic/ <span style="color: #6D85EB; ">AUD 120</span></p>
                    <p>Carnival 2018 Black, Automatic </p>
                    
                </div>


            </div>


            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Contact</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                    </tbody>
                </table>
            </div>





        </div>
    </div>
</section>