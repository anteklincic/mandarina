<?php
$title = "CFMOTO ATV Lineup";
require_once("../header.php");
require_once("../navigation.php"); 
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">

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
</div>



<div class="container">

	<img src="/cfmoto.png" alt="" id="cfmoto">
	<p id="pdv">PDV(25%) je uključen u cijenu svih vozila</p>
	<div class="row">

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-450S/index.php"><img src="1.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 450S</div>
				<div class="panel-footer ">40 000 kn</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-450L/index.php"><img src="2.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 450L</div>
				<div class="panel-footer">44 000 kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-520S/index.php"><img src="3.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 520S</div>
				<div class="panel-footer">44 000 kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-520L/index.php"><img src="4.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 520L</div>
				<div class="panel-footer">48 000 kn</div>
			</div>
		</div>


		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-600S-touring/index.php"><img src="5.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 600S TOURING</div>
				<div class="panel-footer">62 000 kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-600L-touring/index.php"><img src="6.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 600L TOURING</div>
				<div class="panel-footer">64 000 kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-850XC/index.php"><img src="7.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 850XC</div>
				<div class="panel-footer">xx xxx kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="cfmoto-cforce-1000EPS/index.php"><img src="8.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO CFORCE 1000</div>
				<div class="panel-footer">80 000 kn</div>
			</div>
		</div>




	</div>

</div><br>










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