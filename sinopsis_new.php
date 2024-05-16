<?php

	$_id = $_REQUEST['id'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ngihaflix";
	// Create connection
	$conn1 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn1->connect_error) {
		die("Connection failed: " . $connGenre->connect_error);
	}
	$sql = "SELECT id, Picture, Title, Genre, Rating, Quality, Artist, Sinopsis FROM ngihamovie Where id = ".$_id;
	$ResultMovie = $conn1->query($sql);
	if ($ResultMovie->num_rows > 0) {
		// output data of each row
		while($Mov = $ResultMovie->fetch_assoc()) {
			$_movTitle = $Mov["Title"];
			$_movPic = $Mov["Picture"];
			$_movSinop = $Mov["Sinopsis"];
			$_movRating = $Mov["Rating"];
			$_movGenre = $Mov["Genre"];
			$_movArtist = $Mov ["Artist"];
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<?php
		echo '<title>'.$_movTitle.'</title>';
		?>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style_uhuy.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="landing.php" id="branding">
						<img src="./logo.png" alt="" class="logo">
						<div class="logo-copy">
						</div>
					</a> <!-- #branding -->

				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="landing.php">Home</a>
							<!-- <a href="review.html">Movie Review</a> -->
							<?php
									echo '<span>'.$_movTitle.'</span>';
							?>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
								<?php
									echo '<figure class="movie-poster"><img src="./POSTER/'.$_movPic.'" alt="#"></figure>';
								?>
								</div>
								<div class="col-md-6">
									<?php
									echo '<h2 class="movie-title">'.$_movTitle.'</h2>'
									?>
									<!-- 
									<div class="movie-summary">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed.</p>
									</div>
									 -->
									 <?php
										echo '<ul class="movie-meta">';
										echo '<li><strong>Rating:</strong>'; 
										echo '<div class="star-rating" title="Rated '.$_movRating.' out of 10"><span style="width:80%"><strong class="rating"> '.$_movRating.'</strong> out of 10</span></div>';
										echo '</li>';
										// echo '<li><strong>Length:</strong> 98 min</li>';
										// echo '<li><strong>Premiere:</strong> 22 March 2013 (USA)</li>';
										echo '<li><strong>Category:</strong> '.$_movGenre.' </li>';
										echo '</ul>';

										echo '<ul class="starring">';
										// echo '<li><strong>Directors:</strong> Kirk de Mico (as Kirk DeMico). Chris Sanders</li>';
										// echo '<li><strong>Writers:</strong> Chris Sanders (screenplay), Kirk De Micco (screenplay)</li>';
										echo '<li><strong>Stars:</strong> '.$_movArtist.'</li>';
										echo '</ul>';
									?>
									</div>
							</div> <!-- .row -->
							<div class="entry-content">
								<?php
								echo '<p>'.$_movSinop;
								?>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>We love ICT</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<li>My Stupid Boss</li>
									<li>A Man Called Otto</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li>Azka Nayla Maymona</li>
									<li>Lutfiya Ghina Maharani</li>
									<li>Naomi Adya Azzahra</li>
									<li>Inez Fiqrotul Amna Sukadi</li>
									<li>Himmah Aidhatul Muntazha</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Join Us</h3>
								<ul class="no-bullet">
									<li>X-12 NGIHAFLIX Team</li>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li>Instagram</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<div class="colophon">Copyright 2014 Ngihaflix.</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>