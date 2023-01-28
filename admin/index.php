<?php 

session_start();
if(!isset($_SESSION['admin'])){
  header('location: ../alogin.php');

}

include_once "config/db.php";
// include_once "include/core.php";
// $admin = new core($conn);


  $page_title = 'Administration';
  $body_class= 'index';
  require 'head.php';
   
?>

<style>
  #banner{
    height: 92vh;
  }

  .vehicles img{
        width: 100%;
        height: 200px;
        border-radius: 5px 5px 0 0;
        /* margin: 0; */
        /* padding: 0; */
        
    }

    .profile-text{
      background: #f1f1f1;
      padding: 5px;
    }
   
</style>

<?php
 require 'header.php';
?>

<section class="vehicles py-5">
        <div class="title-text">
           <p class="text-center" style="font-size: 30px; font-weight: 600;">Vehicles </p>
        </div>
        <div class="container">
            <div class="row">
           
                <div class="col-4 col-md-3 profile-pic " id=''>
                    <div class="img-box">
                        <img src="../assets/images/500.jpg" class="img-responsive" alt=""> 
                    </div>
                    <div class="profile-text">
                        <h3>Kia Stonic/ <span style="color: #6D85EB">AUD 120</span> </h3>
                        <p>Carnival 2018 Black, Automatic</p>
                        <p class="text-end">
                          <a href="booked.php" class="btn btn-info">Booking Detail</a>
                         <button value="<?=$val["hid"];?>" class="btn btn-danger delete"> <i class="fas fa-times"></i> <span class="show-text">Delete</span></button></p>    
                    </div>
                </div>

                


          
            </div>
        </div>
</section>



