<?php
$title = "GOES IRON 450 MAX";
$description = "";
require_once("../../../header.php");
require_once("../../../navigation.php"); 
require_once("../../../slider.php");
require_once("../../../flexslider.php");
?>

<div class="row-html">
  <div class="column-html">
    <img src="thumb1.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column-html">
    <img src="thumb2.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column-html">
    <img src="thumb3.jpg" alt="Mountains" style="width:100%">
  </div>
  <div class="column-html">
    <img src="thumb4.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

<div class="row myrow">
  <div class="col-md-6 col-lg-6 px-4 blackdiv">
    <h2 class="text-center">CHARACTERISTICS</h2>
    <p>The vehicle is equiped with tubular front and rear rack as well as a trailer ball with an electrical harness. A storage space that locks in the right side of front fender, with a 12 volt power outlet. A second 12 volt power outlet is available to power a GPS installed on the handlebars.</p>
  </div>
  <div class="col-md-6 col-lg-6 px-0">
  <img src="text1.jpg" class="img-fluid" alt="Responsive image">
  </div>
  <div class="col-md-6 col-lg-6 px-0">
  <img src="text2.jpg" class="img-fluid moja" alt="Responsive image">
  </div>
  <div class="col-md-6 col-lg-6 px-4 pt-4 blackdiv">
    <p>Digital information center included on the dashboard with all necessary data available for you to ride comfortably and confidently all-day long. Odometer, fuel gauge, tachometer, parking light, gear position, differential lock light, reverse light, fuel level. “</p>
  </div>
</div>

<?php
require_once("specifications.php");
require_once("../../footer.php"); 
?>
<script>
  flexSliderPoints = [0, 2, 3, 4];
</script>
<script src="/scripts/change-flex-image.js"></script>
<script src="/scripts/responsive-slider.js"></script>
</body>

</html>