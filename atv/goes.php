<?php
$title = "CFMOTO ATV Lineup";
require_once("../header.php");
require_once("../navigation.php"); 
?>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">

	<div class="carousel-inner">
		<div class="carousel-item active">
			<a href="/atv/850xc/index.php">
				<img class="d-block w-100" src="/atv/images/bg1.jpg" alt="First slide" id="slide1">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<h1 class="slider-heading"><strong>CFORCE 850XC</strong></h1>
				<a href="/sxs/zforce1000sport/index.php"><button type="button"
						class="btn btn-lg custom-button explore d-md-table mx-auto">EXPLORE</button></a>
			</div>
		</div>

	</div>
</div> -->

<div class="container">
	<img src="goes.jpg" alt="" id="goes">
	<p id="pdv">PDV(25%) je uključen u cijenu svih vozila</p>
	<div class="row">

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="goes450/index.php"><img src="9.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">GOES IRON 450 MAX</div>
				<div class="panel-footer ">40 000 kn</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="goes550max/index.php"><img src="10.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">GOES COBALT 550 MAX</div>
				<div class="panel-footer">47 000 kn</div>
			</div>
		</div>

	




	</div>

</div><br>



</div>






<?php require_once("../footer.php"); ?>
<script>
	function myFunction(x) {
		const slide1 = document.getElementById("slide1");
		if (x.matches) { //screen-width < 1000
			slide1.src = "/atv/images/bg1-mobile.jpg"

		} else {
			slide1.src = "/atv/images/bg1.jpg"
		}
	}




	var x = window.matchMedia("(max-width: 1000px)")
	myFunction(x) // Call listener function at run time
	x.addListener(myFunction) // Attach listener function on state changes 

	window.addEventListener("load", function () {
		$('.navbar-toggler').trigger("click");
	});
</script>
</body>

</html>