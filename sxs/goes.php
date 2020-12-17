<?php
$title = "CFMOTO Side-by-Side Lineup";
require_once("../header.php");
require_once("../navigation.php"); 
?>


</div>

<!-- 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">

	<div class="carousel-inner">
		<div class="carousel-item active">
			<a href="/sxs/zforce1000eps/index.php">
				<img class="d-block w-100" src="/sxs/images/bg1.jpg" alt="First slide" id="slide1">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<h1 class="slider-heading"><strong>ZFORCE 1000 EPS</strong></h1>
				<a href="/sxs/zforce1000eps/index.php"><button type="button"
						class="btn btn-lg custom-button explore d-md-table mx-auto">EXPLORE</button></a>
			</div>
		</div>

	</div>
</div> -->

<div class="container">
	<div class="row goes_row">
		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/sxs/goes700utx/"><img src="6.png" class="img-responsive goesutv" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-cont">
					<div class="panel-heading">GOES 700 UTX</div>
					<div class="panel-footer">68 000 kn</div>
				</div>
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
			slide1.src = "/sxs/images/bg1-mobile.jpg"

		} else {
			slide1.src = "/sxs/images/bg1.jpg"
		}
	}




	var x = window.matchMedia("(max-width: 992px)")
	myFunction(x) // Call listener function at run time
	x.addListener(myFunction) // Attach listener function on state changes 
</script>
</body>

</html>