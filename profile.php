<?php 
  $page_title = 'Ezy';
  $body_class= 'index';
  require 'head.php';
   
?>


<?php
 require 'header.php';
?>

<style>
    .col-6{
        margin-top:20px;
    }

     #profile-upload  #picture-section{
    position: relative;

    }

     #profile-upload #output1{
        width: 100%;
        filter: grayscale(70%);
        /* filter: contrast(180%) */
    }

     #profile-upload #getval{
        display: none;
    }
        
     #profile-upload #picture-icon {
    position: absolute;
    top: 50%;
    left: 40%;
    transform: translate(-50%, -50%);
    }

     #profile-upload .fa-plus{
        font-size: 30px;
        color: #eee;
        /* padding: 50px; */
    }

     #profile-upload  #picture-section img{
        width: 80%;
        height: 300px;
        border-radius: 5px;
        padding: 10px;

    }

</style>


<section class="profile-section py-5">
    <div class="container">
        <div class="row">
            <h3> <span class="fa fa-user"></span> Customer Profile</h3>
            <form>
                <div class="row py-4">
                    <div class="col-6 ">
                        <label for="lname">Full Name</label>
                        <input type="text" class="form-control" placeholder="Full name" aria-label="Full name">
                    </div>

                    <div class="col-6">
                        <label for="ldob">Mobile Number</label>
                        <input type="number" class="form-control" placeholder="Phone number" aria-label="Last name">
                    </div>
                    

                    <div class="col-6">
                        <label for="laddress">Address</label>
                        <input type="text" class="form-control" placeholder="Address" aria-label="Last name">
                    </div>

                    <div class="col-6">
                        <label for="ldob">DOB</label>
                        <input type="date" class="form-control" placeholder="Date of Birth" aria-label="Last name">
                    </div>

                    <div class="col-6">
                        <div class="filled" id='profile-upload'>
                            <div class="form-group" id="picture-section">
                                <img class="hvr-profile-img" id="output1" src="assets/images/no-image.jpg"> <br>
                                <label for="getval" id="picture-icon"><i class="fas fa-plus" style="color: black"></i></label>
                                <input type="file" name="file" id='getval' accept="image/*" onchange="loadFile(event)"  class="upload w180" title="Dimensions 180 X 180" >
                            </div>           
                        </div>
                    </div>

                    <div class="col-6">
                        <label for=""></label>
                        <input type="submmit" value="Save" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>


<script>

var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var pic1 = document.getElementById('output1');
        pic1.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };

</script>