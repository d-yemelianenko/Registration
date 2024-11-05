<?php
use App\Services\Page;
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once '../components/header.php' ?>
<body>
<?php require_once '../components/nav.php'?>
<div class="container">
  <form>
    <h2 class="mt-4">Sign up</h2>
    <div class="mt-4">
        <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email">
        </div>
    
        <div class="form-group">
        <label for="username" >Username</label>
        <input type="user" class="form-control" id="username">
        </div>

        <div class="form-group">
        <label for="full_name" >Full Name</label>
        <input type="user" class="form-control" id="full_name">
        </div>

        <div class="form-group">
        <label for="avatar" >User Avatar</label>
        <input type="user" class="form-control" id="avatar">
        </div>
  
   
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password">
        </div>

        <div class=" mb-3 form-group">
      <label for="password_confirm">Password Confirmation</label>
      <input type="password" class="form-control" id="password_confirm">
        </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>