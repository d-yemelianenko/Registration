<?php
use App\Services\Page;
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once '../components/header.php' ?>
<body>
<?php require_once '../components/nav.php'?>
<div class="container">
  <form method="post" action="../../lib/reg.php">
    <h2 class="mt-4">Sign up</h2>
    <div class="mt-4">
        <div class="form-group">
        <label for="email">Login</label>
        <input type="text" class="form-control" name="login">
        </div>
        
        <div class="form-group">
        <label for="username" >Username</label>
        <input type="text" class="form-control" name="username">
        </div>

    <div class="mt-4">
        <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email">
        </div>
    
<!--         

        <div class="form-group">
        <label for="full_name" >Full Name</label>
        <input type="user" class="form-control" id="full_name">
        </div> -->

        <!-- <div class="form-group">
        <label for="avatar" >User Avatar</label>
        <input type="file" class="form-control" id="avatar">
        </div> -->
  
   
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password">
        </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>