<?php
$title = "MandarinaMoto - ATV & SxS prodaja";
require_once("header.php");
require_once("navigation.php"); 
require_once("sendmail.php");
?>

<!--- Image Slider -->
<div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel" data-interval="4000">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<a href="/sxs/zforce1000sport/index.php">
				<img class="d-block w-100" src="/images/bg1.jpg" alt="First slide" id="slide1">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<a href="/sxs/zforce1000sport/index.php"
					class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</a>
			</div>
		</div>
		<div class="carousel-item">
			<a href="/atv-quad-vozila/cfmoto-cforce-600L-touring/index.php">
				<img class="d-block w-100" src="/images/bg2.jpg" alt="First slide" id="slide2">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<a href="/atv-quad-vozila/cfmoto-cforce-600L-touring/index.php"
					class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</a>
			</div>
		</div>
		<div class="carousel-item">
			<a href="/atv-quad-vozila/cfmoto-cforce-1000EPS/index.php">
				<img class="d-block w-100" src="/images/bg3.png" alt="First slide" id="slide3">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<a href="/atv-quad-vozila/cfmoto-cforce-1000EPS/index.php"
					class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</a>
			</div>
		</div>
		<div class="carousel-item">
			<a href="/motorcycles/650nk/index.php">
				<img class="d-block w-100" src="/images/bg4.jpg" alt="First slide" id="slide4">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<a href="/motorcycles/650nk/index.php"
					class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</a>
			</div>
		</div>
		<div class="carousel-item">
			<a href="/atv-quad-vozila/cfmoto-cforce-850XC/index.php">
				<img class="d-block w-100" src="/images/bg5.jpg" alt="First slide" id="slide5">
			</a>
			<div class="carousel-caption custom-carousel-caption">
				<a href="/atv-quad-vozila/cfmoto-cforce-850XC/index.php"
					class="btn btn-lg custom-button explore d-md-table mx-auto">ISTRAŽI</a>
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
</div>


<div class="row mt-4">

	<!-- <div class="col-md-12 col-lg-6 px-0 pr-lg-3 pr-xl-3">
	

				<video disableRemotePlayback autoplay loop muted id="my-video" class="video-js" preload="auto"
				data-setup='{"fluid": true}'>
					<source src="goes_final.webm" type="video/webm" />
					<p class="vjs-no-js">
						To view this video please enable JavaScript, and consider upgrading to a
						web browser that
						<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
					</p>
				</video>
	
	</div> -->



	<div class="col-md-12 col-lg-6 px-0 pl-lg-2 pl-xl-2 pt-4 pt-xl-0 pt-lg-0">
		<a href="/sxs/zforce550ex/index.php"><img src="img2.png" class="img-fluid" alt="ccs_logo" /></a>
	</div>
</div>

<div class="row mt-4">
	<div class="col-md-12 col-lg-6 px-0  pr-lg-3 pr-xl-3">
		<a href="/atv-quad-vozila/cfmoto/cforce-520s/index.php"><img src="img3.jpg" class="bg1 img-fluid" alt="inn_logo" /></a>
	</div>
	<div class="col-md-12 col-lg-6 px-0  pl-lg-2 pl-xl-2 pt-4 pt-xl-0 pt-lg-0">
		<a href="/sxs/zforce1000eps/index.php"><img src="img4.png" class="bg1 img-fluid" alt="ccs_logo" /></a>
	</div>
</div>


<div class="row quote mt-5 mb-3" id="contactus">
	<div class="col">
		<h2 class="text-center heading-text">KONTAKT</h2>

	</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
	<div class="messages">
		<?= $alertDiv ?>
	</div>
	<form action="" method="post">
		<div class="form-group required">
			<label for="name" class="font-weight-bold control-label">Vaše ime</label>
			<input type="text" name="name" class="form-control" id="name" required>
		</div>

		<div class="form-group required">
			<label for="email" class="font-weight-bold control-label">Email</label>
			<input type="email" name="email" class="form-control" id="email" required>
		</div>

		<div class="form-group">
			<label for="phone" class="font-weight-bold control-label">Mobitel</label>
			<input type="text" name="phone" class="form-control" id="phone">
		</div>

		<div class="form-group">
			<label for="country" class="font-weight-bold control-label">Država</label>
			<input type="text" name="country" class="form-control" id="country">
		</div>

		<div class="form-group">
			<label for="inquiryModel" class="font-weight-bold control-label">Model vezan za upit</label>
			<input type="text" name="model" class="form-control" id="inquiryModel">
		</div>

		<div class="form-group required">
			<label for="message" class="font-weight-bold control-label">Vaša poruka</label>
			<textarea class="form-control" name="message" id="message" required rows="6"></textarea>
		</div>
		<button type="submit" name="submit" class="btn btn-block submit-button">Pošalji</button>
	</form>
</div>


<?php require_once("footer.php"); ?>

<!-- <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script> -->

<script>
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}
</script>

<script>
	// $(document).ready(function () {
	// 	var touchmoved;
	// 	$("#my-video").on('touchend', function (e) {
	// 		if (touchmoved != true) {
	// 			window.location = "/atv-quad-vozila/goes/goes450/index.php";
	// 		}
	// 	}).on('touchmove', function (e) {
	// 		touchmoved = true;
	// 	}).on('touchstart', function () {
	// 		touchmoved = false;
	// 	});

	// 	$("#my-video").on('click', function () {
	// 		window.location = "/atv-quad-vozila/goes/goes450/index.php";
	// 	});
	// 	var vid = document.getElementById("my-video");
	// 	vid.disablePictureInPicture = true;
	// 	vid.muted = true;
	// });



	// videojs('my-video').ready(function () {
	// 	console.log("fa");
	// 	this.play();
	// });

	$(document).bind('keyup', function (e) {
		if (e.which == 39) {
			$('.carousel').carousel('next');
		} else if (e.which == 37) {
			$('.carousel').carousel('prev');
		}
	});

	// $('#goes-div').on('click touchstart', function () {
	// 	window.open("https://www.youraddress.com", "_self");
	// 	console.log("LOL");
	// });

	// $('.my-video').on('click touchstart', function () {
	// 	window.open("https://www.youraddress.com", "_self");
	// 	console.log("LOL");
	// });

	// 	function changeSliderImage(x) {
	//     const slider1 = document.getElementById("slide1");
	//     const slider2 = document.getElementById("slide2");
	//     const slider3 = document.getElementById("slide3");
	// 	const slider4 = document.getElementById("slide4");

	//     if (x.matches) { // <1000px
	// 		console.log("DA");
	//         slide1.src = "images/bg1-mobile.jpg";
	//         slide2.src = "images/bg2-mobile.jpg";
	//         slide3.src = "images/bg3-mobile.jpg";
	// 		slide4.src = "images/bg4-mobile.jpg";
	//         } else {
	// 			console.log("NE");
	//             slide1.src = "images/bg1.jpg";
	//             slide2.src = "images/bg2.jpg";
	//             slide3.src = "images/bg3.jpg";
	// 			slide4.src = "images/bg4.jpg";
	//         }
	// }

	// var x = window.matchMedia("(max-width: 1000px)")
	// changeSliderImage(x)
	// x.addListener(changeSliderImage)
</script>
</body>

</html>