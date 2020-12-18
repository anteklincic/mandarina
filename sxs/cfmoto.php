<?php
$title = "CFMOTO Side-by-Side Lineup";
require_once("../header.php");
require_once("../navigation.php"); 
?>


</div>


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
</div>

	<div class="container">
	<img src="cfmoto.png" alt="" id="cfmoto">
		<div class="row">
			<div class="col-sm-6 col-xs-12 col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-body">
						<a href="zforce550ex/index.php"><img src="1.png" class="img-responsive" style="width:100%"
								alt="Image"></a>
					</div>
					<div class="panel-cont">
						<div class="panel-heading">CFMOTO ZFORCE 550 EX</div>
						<div class="panel-footer">75 000 kn</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-body">
						<a href="zforce1000eps/index.php"><img src="2.png" class="img-responsive" style="width:100%"
								alt="Image"></a>
					</div>
					<div class="col">
						<div class="panel-heading">CFMOTO ZFORCE 1000 EPS</div>
						<div class="panel-footer">98 000 kn</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-xs-12 col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-body">
						<a href="zforce1000sport/index.php"><img src="3.jpg" class="img-responsive" style="width:100%"
								alt="Image"></a>
					</div>
					<div class="panel-heading">CFMOTO ZFORCE 1000 SPORT</div>
					<div class="panel-footer">115 000 kn</div>
				</div>
			</div>

			<div class="col-sm-6 col-xs-12 col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-body">
						<a href="uforce550/index.php"><img src="4.jpg" class="img-responsive" style="width:100%"
								alt="Image"></a>
					</div>
					<div class="panel-heading">CFMOTO UFORCE 550</div>
					<div class="panel-footer">75 000 kn</div>
				</div>
			</div>


			<div class="col-sm-6 col-xs-12 col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-body">
						<a href="uforce1000eps/index.php"><img src="5.jpg" class="img-responsive" style="width:100%"
								alt="Image"></a>
					</div>
					<div class="panel-heading">CFMOTO UFORCE 1000 EPS</div>
					<div class="panel-footer">102 000 kn</div>
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