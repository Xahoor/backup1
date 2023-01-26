<?php 
  $page_title = 'Ezy';
  $body_class= 'index';
  require 'head.php';

  if(isset($_GET['name'])){
    // select vehicles related to name
}else{
    //  select all vehicles
}
   
?>

<style>
    .vehicles img{
        width: 100%;
        height: 200px;
        border-radius: 5px 5px 0 0;
        /* margin: 0; */
        /* padding: 0; */
        
    }

    .one-vehicle{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        margin-left: 20px;
    }

    @media only screen and (max-width: 500px){
        .one-vehicle{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        margin-left: 0px;
        /* padding: 10px; */
        margin-top: 10px;
    }  
    }
    .content{
        padding: 10px;
    }

    .content table{
        margin-left: 10px;
    }

.one-vehicle {
    position: relative;
}

.book{
    position: absolute;
    /* top: 10%; */
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

<section class="vehicles">
        <div class="container py-4">
            <hr>
            <div class="row g-0">
            <h1 class="text-center">Vehicles For Rent</h1>
                 <!-- <span class="line-mf"></span> -->
                 <br><br><br><br>

                
                 <div class="col-md-4 one-vehicle g-0">
                    <a href="detail.php">
                        <img src="assets/images/500.jpg" alt="">
                        <span class="book">Booked</span>
                    </a>
                    <div class="content py-2">
                        <table style="width: 100%;">
                            <tr><td><i class="fas fa-hand-holding-usd"></i> AUD 120/day</td> <td><i class="fas fa-car"></i> Kia Stonic </td></tr>
                            <tr>
                                <td><i class="fas fa-users"></i> 5 Seats</td>
                                <td> <i class="fas fa-user-robot"></i> Automatic</td>
                                <td><i class="fas fa-suitcase-rolling"></i> 5 Small bags</td>
                            </tr>
                        </table>
                    </div>
                 </div>





                 <div class="col-md-4 one-vehicle g-0">
                    <a href="detail.php">
                        <img src="assets/images/500.jpg" alt="">
                        <!-- <span class="book">Booked</span> -->
                    </a>
                    <div class="content py-2">
                        <table style="width: 100%;">
                            <tr><td><i class="fas fa-hand-holding-usd"></i> AUD 120/day</td> <td><i class="fas fa-car"></i> Kia Stonic </td></tr>
                            <tr>
                                <td><i class="fas fa-users"></i> 5 Seats</td>
                                <td> <i class="fas fa-user-robot"></i> Automatic</td>
                                <td><i class="fas fa-suitcase-rolling"></i> 5 Small bags</td>
                            </tr>
                        </table>
                    </div>
                 </div>

                 

                 

                 
               

                 


            </div>
        </div>
    </section>
