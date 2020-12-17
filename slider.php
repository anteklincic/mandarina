<?php
$files = scandir('.');

if (in_array("bg1.jpg", $files) && in_array("bg2.jpg", $files) && in_array("bg3.jpg", $files))
    echo('
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg1.jpg" class="d-block w-100" alt="..." id="slide1">
    </div>
    <div class="carousel-item">
      <img src="bg2.jpg" class="d-block w-100" alt="..." id="slide2">
    </div>
    <div class="carousel-item">
      <img src="bg3.jpg" class="d-block w-100" alt="..." id="slide3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
');

else if (in_array("bg1.jpg", $files) && in_array("bg2.jpg", $files))
    echo('
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg1.jpg" class="d-block w-100" alt="..." id="slide1">
    </div>
    <div class="carousel-item">
      <img src="bg2.jpg" class="d-block w-100" alt="..." id="slide2">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
');

else if ((in_array("bg1.jpg", $files)))
    echo('
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg1.jpg" class="d-block w-100" alt="..." id="slide1">
    </div>
    
</div>
</div>
');
else
  echo("ERROR, carousel slider image is missing or named improperly.");
?>




