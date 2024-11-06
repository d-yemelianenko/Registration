<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../pages/home.php">Home</a>    
      </div>
    </div>
    <?php 
    if(isset($_COOKIE['email'])){
      echo '<div class="navbar-nav d-flex"> <a class="nav-link active" href="user.php">Profile</a>  </div>';
    }
    else{
      echo '  <div class="navbar-nav d-flex">
      <a class="nav-link active" href="login.php">Login</a>
    </div>
  
    <div class="navbar-nav d-flex">
      <a class="nav-link active" href="registr.php">Register</a>
    </div>';
    }
    
    ?>
</nav> 
