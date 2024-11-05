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
 
</div>
</body>
</html>