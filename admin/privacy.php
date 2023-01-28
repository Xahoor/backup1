<?php 

session_start();
if(!isset($_SESSION['admin'])){
  header('location: ../alogin.php');

}



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
                        <label for="opassword" id="label-emal">User Name or Email</label>
                        <input type="email" id="email" value="<?php echo $_SESSION['admin']['email']; ?>" class="form-control">
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
                        <button type="button" id="update-btn" class="btn btn-success form-control">Save</button>
                        <!-- <input type="hidden" name="std_id" value=""> -->
                    </div>
        </div>
    </div>


</div>


<script>

$('body').on('click', '#update-btn', function(e) {
    e.preventDefault();

    let email = $("#email").val();
    let opassword = $("#opassword").val();
    let npassword = $("#npassword").val();
    if(email==""){
      alert('User Id or Email required');
    }if(opassword==""){
      alert("Old Passowrd required");
    }if(npassword==""){
      alert(" New Passowrd required");
    }

    if(email!="" && opassword!="" && npassword!=""){
    $.ajax({
      url: "include/routes.php",
      type: "POST",
      data: {type: 1, email: email, opassword: opassword,npassword,npassword},
      success: function(response){
        // var res= JSON.parse(JSON.stringify(response));
         let res= JSON.parse(response);

        if(res.statusCode==200){
            alert('successfully changed! but you need to logout');
            $('#email').val(email);
            $('#opassword').val('');
            $('#npassword').val('');
            
            
        }
          // alert('faile');
          else if(res.statusCode==201){
            alert("You entered wrong Old Password");
        }
        
      }
    });
  }


  });
</script>