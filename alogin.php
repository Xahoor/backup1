<?php 



  $page_title = 'Admin Login';
  $body_class= 'login_page';
  include "head.php";
  // include  $_SERVER['DOCUMENT_ROOT'].'head.php';

  // $login = new Login($conn);
  // if($_POST){

  // }
   
?>

<style>
  #invalid{
    padding-bottom: 0;
    text-align: center;
    visibility: hidden;

  }

  #invalid label{
    padding-left: 5px;
    padding-right: 5px;
  }

  #for-invalid{
    padding-top: 0;
    margin-top: 0;
  }
</style>

<section class="login">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-12 col-md-4 loginForm">
        <div class="form-title text-center">
            <p>Admin Login</p>
        </div>
        <form action="" >

         <div class="form-group" id="invalid">
            <label for="user" class="alert alert-warning">Invalid! User Id or Password</label>
          </div>

          <div class="form-group" id="for-invalid">
            <label for="user" id="lable-user">User Name or Email</label>
            <input type="text" name="email" id="user" class="form-control" autofocus>
          </div>
          <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" name="email" id="login-password" class="form-control">
          </div>

          <div class="form-group">
          <input type="checkbox" onclick="showPassword()" id="pas"> <label for="pas">Show Password</label> 

          </div>
          <div class="form-group text-end">
            
            <!-- <input type="submit" id="admin-login" class="btn btn-success" value="Login"> -->
            <button type="button" class="btn btn-success" id="admin-login">Login</button>
            <!-- <a href="dashboard.php" class="btn btn-success">Login</a> -->

          </div>
				<a href="index.php" style="color: #666;">Go to Home page</a>

        </form>

      </div>
    </div>
  </div>
  
</section>


<script>
  $('body').on('click', '#admin-login', function(e) {
    e.preventDefault();

    let email = $("#user").val();
    let password = $("#login-password").val();
    if(email==""){
      alert('Email required');
    }if(password==""){
      alert("Passowrd required");
    }

    if(email!="" && password!=""){
    $.ajax({
      url: "admin/include/do-login.php",
      type: "POST",
      data: {type: 1, email: email, password: password},
      success: function(response){
        // var res= JSON.parse(JSON.stringify(response));
         let res= JSON.parse(response);

        if(res.statusCode==200){
          $('#invalid').css('visibility','hidden');
          window.location.href ='admin/index.php';
        }
          // alert('faile');
          else{
          $('#invalid').css('visibility','visible');
        }
        
      }
    });
  }


  });

  function showPassword() {
  var x = document.getElementById("login-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    
</body>
</html>