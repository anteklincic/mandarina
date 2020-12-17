<?php
$files = scandir('.');
$sliderImages = preg_grep('/img[1-9](?!-)/', $files); //match img*, but not img-
$colors = preg_grep('/color[1-9]/', $files);
sort($sliderImages);
sort($colors);
$str = <<<EOD
<div class="container-fluid no-padding">
  <div class="row vehicle-row">
    <div class="col-lg-6 offset-xl-1">
      <div id="slider" class="flexslider" id="vehiclesslider">
        <ul class="slides">

EOD;

foreach($sliderImages as $image) {
    $withoutExtension = pathinfo($image, PATHINFO_FILENAME);
    $extension = substr($image, -3);
    $str .= <<<EOD
    <li>
    <img src="$image" class="vehicle-image">
    </li>
EOD;
}

$str .= <<<EOD
        </ul>
      </div>
      <div id="carousel" class="flexslider">
  <ul class="slides slides2">
EOD;

foreach($sliderImages as $image) {
    $withoutExtension = pathinfo($image, PATHINFO_FILENAME);
    $extension = substr($image, -3);
    $str .= <<<EOD
    <li>
    <img src="$withoutExtension-thumbnail.$extension" class="img-thumbnail">
    </li>
EOD;
}


$str .= <<<EOD
    </ul>
    </div>
    </div>
    <div class="col-lg-4 vehicle-name">
    <h2 class="text-left">$title</h2>

EOD;


for ($i = 0; $i < count($colors); $i++) {
    $str .= <<<EOD
    <img src="{$colors[$i]}" class="color" onclick="changeImg(this)">

EOD;
}

if (count($colors) > 0){
  $str .= '<br><br>';
}


$str .= <<<EOD
<p class="description">
  $description
</p>
</div>
</div>
</div>
EOD;
echo($str);
?>
