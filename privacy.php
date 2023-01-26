<?php 
  $page_title = 'Ezy';
  $body_class= 'index';
  require 'head.php';
   
?>


<?php
 require 'header.php';
?>


<div class="container py-5">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 password py-4">
                    <div class="form-group">
                        <label for="opassword" id="label-old">Email</label>
                        <input type="email" value="khan@gmail.com" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="opassword" id="label-old">Old Password</label>
                        <input type="password" name="opassword" id="opassword" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="npassword" id="label-new">New Password</label>
                        <input type="password" name="npassword" id="npassword" class="form-control">
                    </div>
                    <div class="form-group save-button py-2">
                        <button type="submit" id="update" class="btn btn-success form-control">Save</button>
                        <input type="hidden" name="std_id" value="<?php echo $_SESSION['student']['std_id']; ?>">
                    </div>
        </div>
    </div>


</div>