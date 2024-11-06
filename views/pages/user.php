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
  <form method="post" action="../../lib/auth.php">
    <h2 class="mt-4">Profile</h2>
    <div class="mt-4">
      <label for="email" class="form-label">Email address : <b><?= $_COOKIE['email'];?></b> .</label>
  </form>
</div>
</body>
</html>