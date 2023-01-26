
<!-- <?php
    $x=1;
        if($x==0){
            ?>
    <style>
        .login-none{
            display: none;
        }
    </style>
            <?php
        }else{
            ?>
            <style>
                .profile-none{
                    display: none;
                }
            </style>
            <?php
        }
?> -->

<header id="nav-bar header">

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="color: #fff; font-size: 25px; font-weight: 600;">Ezy Rentals</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item" >
            <a class="nav-link " style="color: white;font-weight: 600;" href="add-vehicle.php">Add Vehicle</a>
          </li>
         

          <li class="nav-item dropdown profile-none">
            <a class="nav-link image" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
              <span class="named" style="color: #fff; font-weight: 600;margin-left: 5px;"> 
                Setting
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="privacy.php">Privacy</a>           
              <a class="dropdown-item" href="logout.php">Logout</a>           
            </div>
          </li>


        </ul>
      </div>
    </div>
  </nav>

</header>