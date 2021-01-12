<?php
$title = "CFMOTO Motorcycles Lineup";
require_once("../header.php");
require_once("../navigation.php"); 
?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<a href="/motorcycles/400gt/index.php">
				<img class="d-block w-100" src="/motorcycles/images/bg1.jpg" alt="First slide" id="slide1">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<h1 class="slider-heading"><strong>CFOMOTO 400GT</strong></h1>
				<a href="/motorcycles/400gt/index.php"><button type="button"
						class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</button></a>
			</div>
		</div>
		<div class="carousel-item">
			<a href="/motorcycles/650gt/index.php">
				<img class="d-block w-100" src="/motorcycles/images/bg2.jpg" alt="First slide" id="slide2">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<h1 class="slider-heading"><strong>CFMOTO 650GT</strong></h1>
				<a href="/motorcycles/650gt/index.php"><button type="button"
						class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</button></a>
			</div>
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



<div class="container">

<img src="/cfmoto.png" alt="" id="cfmoto">
	<p id="pdv">PDV(25%) je uključen u cijenu svih vozila</p>
	<div class="row">
		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="150nk/index.php"><img src="1.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-cont">
					<div class="panel-heading">CFMOTO 150NK</div>
					<div class="panel-footer">kn</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="250nk/index.php"><img src="2.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="col">
					<div class="panel-heading">CFMOTO 250NK</div>
					<div class="panel-footer">kn</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="300nk/index.php"><img src="3.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO 300NK</div>
				<div class="panel-footer">kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="400nk/index.php"><img src="4.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO 400NK</div>
				<div class="panel-footer">kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="400gt/index.php"><img src="5.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO 400GT</div>
				<div class="panel-footer">kn</div>
			</div>
		</div>


		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="650mt/index.php"><img src="6.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO 650MT</div>
				<div class="panel-footer">kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="650nk/index.php"><img src="7.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO 650NK</div>
				<div class="panel-footer">kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="650gt/index.php"><img src="8.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO 650GT</div>
				<div class="panel-footer">kn</div>
			</div>
		</div>

		<div class="col-sm-6 col-xs-12 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<a href="300sr/index.php"><img src="9.jpg" class="img-responsive" style="width:100%"
							alt="Image"></a>
				</div>
				<div class="panel-heading">CFMOTO 300SR</div>
				<div class="panel-footer">kn</div>
			</div>
		</div>



	</div>
</div><br>





<?php require_once("../footer.php"); ?>
<script>
		function myFunction(x) {
		const slide1 = document.getElementById("slide1");
		const slide2 = document.getElementById("slide2");
		if (x.matches) { // Ako manje od 1200
			slide1.src = "/motorcycles/images/bg1-mobile.jpg";
			slide2.src = "/motorcycles/images/bg2-mobile.jpg";
	  } else {
		slide1.src = "/motorcycles/images/bg1.jpg";
		slide2.src = "/motorcycles/images/bg2.jpg";
	  }
	}




	var x = window.matchMedia("(max-width: 992px)")
	myFunction(x) // Call listener function at run time
	x.addListener(myFunction) // Attach listener function on state changes 

</script>
</body>

</html>