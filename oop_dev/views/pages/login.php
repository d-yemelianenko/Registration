<?php
use App\Services\Page;
require_once '../../app/Services/Page.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php 
$header = "header";
Page::part($header);?>
<body>
<?php
$nav = "nav";
Page::part($nav);
 ?>
<div class="container">
  <form>
    <h2 class="mt-4">Sign in</h2>
    <div class="mt-4">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" >
     
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>