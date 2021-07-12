<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Covid Care</title>
	
    <link rel="icon" href="../../images/logo.jpg" type="image/png">
	<link rel="stylesheet" href="../css/video.css">
	<link rel="stylesheet" href="../css/all.css">
	<script src="../js/jqueryV3.6.0.min.js"></script>
</head>
<body>
	<div class="menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
	<div class="nav">
        <a href="reviews.php" class="review">Reviews</a>
        <a href="photogallery.html" class="photo">Photo Gallery</a>
        <a href="#" class="video active a">Video Gallery</a>
    </div>
	<div class="container">
		<h1>Video Gallery</h1>
		<div class="row">
			<div class="col pic">
				<div class="feature-img">
					<img src="../assets/mumbai.png" width="100%">
					<span><i class="fas fa-play fa-2x play-btn" onclick="playVideo('Mumbai Staff Nurse Story Who Tested Covid Care Positive.mp4')"></i></span>
				</div>
				<p>Mumbai Staff Nurse Story Who Tested Covid Care Positive</p>
			</div>
			<div class="col">
				<div class="small-img-row">
					<div class="small-img">
						<img src="../assets/delhi.png">
						<span><i class="fas fa-play play-btn" onclick="playVideo('Delhi girl shares her experience after contracting COVID19.mp4')"></i></span>
					</div>
					<p>Delhi girl shares her experience after contracting COVID19</p>
				</div>
				<div class="small-img-row">
					<div class="small-img">
						<img src="../assets/dwaraka.png">
						<span><i class="fas fa-play play-btn" onclick="playVideo('Mr Praveen Singh from Dwarka sharing his COVID19 recovery experience_360p.mp4')"></i></span>
					</div>
					<p>Mr Praveen Singh from Dwarka sharing his COVID19 recovery experience</p>
				</div>
				<div class="small-img-row">
					<div class="small-img">
						<img src="../assets/mumbai1.png">
						<span><i class="fas fa-play play-btn" onclick="playVideo('21 Year Old Mumbai Boys Story Of Covid Care Recovery.mp4')"></i></span>
					</div>
					<p>21 Year Old Mumbai Boys Story Of Covid Care Recovery</p>
				</div>
			</div>
		</div>
	</div>
	<div class="video-player" id="videoPlayer">
		<video width="1000px" controls id="myVideo">
			<source src="Mumbai Staff Nurse Story Who Tested Covid Care Positive.mp4" type="video/mp4">
		</video>
		<span><i class="fas fa-times-circle fa-2x close-btn" onclick="stopVideo()"></i></span>
	</div>

	<script type="text/javascript">
		var videoPlayer = document.getElementById("videoPlayer");
		var  myVideo = document.getElementById("myVideo");

		function stopVideo(){
			videoPlayer.style.display = "none";
			myVideo.pause();

		}

		function playVideo(file){
			myVideo.src = file;
			videoPlayer.style.display = "block";
			myVideo.play();
		}
	</script>
	<script type="text/javascript">
        $(document).ready(function(){
            $('.menu').click(function(){
				    $('.menu').toggleClass('active')
				    $('.nav').toggleClass('active')
			});
        });
    </script>

</body>
</html>
