<?php
$title = "CFMOTO ATV Lineup";
require_once("../header.php");
require_once("../navigation.php"); 
?>




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">

	<div class="carousel-inner">
		<div class="carousel-item active">
			<a href="/atv-quad-vozila/cfmoto/cforce-850-eps/index.php">
				<img class="d-block w-100" src="/sxs/images/bg1.jpg" alt="First slide" id="slide1">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<h1 class="slider-heading"><strong>CFORCE 850 EPS</strong></h1>
				<a href="/atv-quad-vozila/cfmoto/cforce-850-eps/index.php"><button type="button"
						class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</button></a>
			</div>
		</div>

	</div>
</div>



<div class="container">

	<img src="/cfmoto.png" alt="" id="cfmoto">
	<p id="pdv">PDV(25%) je uključen u cijenu svih vozila</p>
	<div class="row">

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-450s/index.php"><img
							src="/atv-quad-vozila/cfmoto/images/1.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 450S</div>
				<div class="panel-footer ">44 500 kn</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-450l/index.php"><img
							src="/atv-quad-vozila/cfmoto/images/2.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 450L</div>
				<div class="panel-footer">46 500 kn</div>
			</div>
		</div>



		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-520l/index.php"><img
							src="/atv-quad-vozila/cfmoto/images/4.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 520L</div>
				<div class="panel-footer">52 500 kn</div>
			</div>
		</div>



		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-625s-eps/index.php"><img
							src="/atv-quad-vozila/cfmoto/images/5.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 625S</div>
				<div class="panel-footer"><s>64 000 kn </s><span id="la" style="background-color: #FFFF00"> -7%</span> <span id="lol">59 520 kn</span></div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-625l"><img src="/atv-quad-vozila/cfmoto/images/6.jpg"
							class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 625L EPS</div>
				<div class="panel-footer"><s>68 500 kn </s> <span id="la" style="background-color: #FFFF00"> -7%</span> <span id="lol">63 705 kn</span></div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-850-eps/index.php"><img
							src="/atv-quad-vozila/cfmoto/images/7.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 850 EPS</div>
				<div class="panel-footer">79 000 kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-1000-eps/index.php"><img
							src="/atv-quad-vozila/cfmoto/images/8.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 1000 EPS</div>
				<div class="panel-footer">88 000 kn</div>
			</div>
		</div>



		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="/atv-quad-vozila/cfmoto/cforce-1000-overland-t3b/index.php"><img
							src="/atv-quad-vozila/cfmoto/images/9.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 1000 OVERLAND T3b</div>
				<div class="panel-footer">96 500 kn</div>
			</div>
		</div>




	</div>

</div><br>










<?php require_once("../footer.php"); ?>
<script>
	function myFunction(x) {
		const slide1 = document.getElementById("slide1");
		if (x.matches) { //screen-width < 1000
			slide1.src = "/atv-quad-vozila/images/bg1-mobile.jpg";
			console.log("ne");

		} else {
			slide1.src = "/atv-quad-vozila/images/bg1.jpg";
			console.log("da");
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