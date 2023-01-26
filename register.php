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
	label{
		color: #fff;
	}

	.form-group{
		margin-top: 20px;
	}
</style>
  

    
	<div class="container py-2">
	<div class="row sign-up">
		<div class="col-md-2"></div>
	<div class=" col-md-8">
	
	<h1 class="text-center" style="color: #fff;">Create Customer Account</h1>
	<hr>
	


		<br><br>
          <form method="post" action="signup.php">
				<div class="form-group">
					<label>Full Name:</label>
					<input type="text" name="user_ac_name" class="form-control" autofocus required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="user_ac_email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="user_ac_password" id="myInput" class="form-control psw" required>			
                </div>
				<div class="form-group">
         			 <input type="checkbox" onclick="showPassword()" id="pas"> <label for="pas">Show Password</label> 

         		 </div>
                <div class="form-group">
					<label>Contact No</label>
					<input type="text" name="user_ac_contact" class="form-control" required>
                </div>
                <div class="form-group">
					<label>Date of Birth</label>
					<input type="date" name="user_ac_dob" class="form-control" required>
                </div>
       
				<div class="text-end form-btn py-2">
				<a href="index.php" class="btn btn-primary">Go Back</a>
					<input  type="submit" class="btn btn-danger" name="user_submit_btn" value="Register" >
					
				</div>
		  </form>
       <br><br>
	   </div>
	   </div>
	   </div>
	   
	   <script>
					function showPassword() {
										var x = document.getElementById("myInput");
										if (x.type === "password") {
											x.type = "text";
										} else {
												x.type = "password";
												}
															}
					</script>
	  
	

 
</body>
</html>