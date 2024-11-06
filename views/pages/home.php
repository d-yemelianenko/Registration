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
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Hello
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body mt-4">
        <a class="btn btn-primary btn-lg" href="registr.php" role="button">Sign Un</a>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</body>
</html>