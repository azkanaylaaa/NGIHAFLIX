<?php
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


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <header>
    <!-- Background image -->
  <div
  <!-- Just an image -->
<nav class="navbar navbar-light bg-body-tertiary bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../logo.png "
                 height="60"
                 alt="NGIHAFLIX Logo"
                 loading="lazy" />
        </a>
    </div>
</nav>

    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

  <body>
    <form action="post.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
  <label for="formFile" class="form-label">Picture</label>
  <input class="form-control" type="file" id="formFile" name='pic'>
 </div>

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="txttitle">
  </div>
  <div class="mb-3">
    <label for="genre" class="form-label">Genre</label>
    <select name="genrelist" id="genre" class="form-control">
            <option value="Romantic">Romantic</option>
            <option value="Comedy">Comedy</option>
            <option value="Horror">Horror</option>
            <option value="Action">Action</option>
            <option value="Drama">Drama</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="rating" class="form-label">Rating</label>
    <input type="text" class="form-control" id="rating" name="txtrating">
  </div>
  <div class="mb-3">
    <label for="artist" class="form-label">Artist</label>
    <input type="text" class="form-control" id="artist" name="txtartist">
  </div>
  <div class="mb-3">
    <label for="sinopsis" class="form-label">Sinopsis</label>
    <input type="text" class="form-control" id="sinopsis" name="txtsinopsis">
  </div>
  <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>

</form>

<?php
$picture = @$_FILES['pic']['name'];
$title = @$_POST['txttitle'];
$genre = @$_POST['genrelist'];
$rating = @$_POST['txtrating'];
$artist = @$_POST['txtartist'];
$sinopsis = @$_POST['txtsinopsis'];
$submit = @$_POST['btnsubmit'];


$sql_simpan = mysqli_query ($conn1, "insert into ngihamovie (Picture, Title, Genre, Rating, Artist, Sinopsis) values ('$picture', '$title', '$genre', '$rating', '$artist', '$sinopsis')");
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>