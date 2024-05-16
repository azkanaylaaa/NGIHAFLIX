<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tagss for new branch -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./n.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./landing.css">
    <link rel="stylesheet" href="./responsive.css">
    <title>Ngihaflix</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    
    <div style="position: relative;">
    <!-- header -->
    <nav class="navbar navbar-expand-lg ngihaflix-navbar ngihaflix-padding-left ngihaflix-padding-right">
      <div class="container-fluid">
        <div class="ngihaflix-row">
          <div class="left d-flex align-items-center">
            <a class="navbar-brand" href="#">
              <img src="./logo.png" alt="">
            </a>
            <div  class="ngihaflix-nav">
               <section>
                  <button>Home</button>
                  <button>TV Shows</button>
                  <button>Movies</button>
                  <button>News & Popular</button>
                  <button>My List</button>
               </section>
            </div>
            <div class="ngihaflix-dropdown-box dropdown">
              <button class="ngihaflix-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Browse
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">TV Shows</a></li>
                <li><a class="dropdown-item" href="#">Movies</a></li>
                <li><a class="dropdown-item" href="#">News & Popular</a></li>
                <li><a class="dropdown-item" href="#">My List</a></li>
              </ul>
            </div>
          </div>
          <div class="right d-flex align-items-center">
            <i class="bi bi-search"></i>
            <i class="bi bi-bell-fill"></i>
            <section class="ngihaflix-profile">
              
            </section>
          </div>
        </div>
      </div>
    </nav>
    <!-- /header -->


    <!-- video -->
    <div class="">
      <section class="ngihaflix-home-video">
        <div class="top"></div>
        <div class="bottom"></div>
        <video src="./video transformer.mp4" autoplay muted loop></video>
        <div class="content">
          <section class="left">
            <img src="./POSTER/transformer.png" alt="">
              <div class="d-flex mt-2">
                <button class="btn btn-light m-2" > <i class="bi bi-play-fill" style="color: black; padding: 0%;"></i> Play Now </button>
                <button class="btn btn-secondary m-2"><i class="bi bi-info-circle" style=" padding: 0%;"></i> More Info</button>
              </div>
            </img>
          </section>
        </div>
      </section>
    </div>
    <!-- video -->

    <!-- sliders -->
    <div class="slider-box">
      <div class="container-fluid slider">
        <div class="container-fluid  slide2">
        <section class="d-flex justify-content-between margin-right margin-title">
          <p class="text-white"> <b>Trending</b> </p>
          <div class="">
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active tab-change-btn" aria-current="true" aria-label="Slide 1"></button>
            <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" style="position: relative; overflow: visible;">
            <div class="carousel-item active">
              <section class="d-flex">

              <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ngihaflix";
                // Create connection
                $conn_ = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn_->connect_error) {
                  die("Connection failed: " . $conn_->connect_error);
                }
                $sql = "SELECT id, Picture, Title, Genre, Rating, Quality FROM ngihamovie WHERE Trending = 1 ORDER BY ReleaseDate DESC";
                $result = $conn_->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                $x = 0;
                while($row = $result->fetch_assoc()) {
                  $x = $x + 1;
                  if ($x > 5) break;

                  echo '<div class="card" >';
                  echo '<img src="./POSTER/'.$row["Picture"].'" class="card-img-top" alt="...">';
                  echo '<div class="card-body">'; 
                  echo '<section class="d-flex justify-content-between">';
                  echo '<div>';
                  echo '<a class="bi bi-play-circle-fill card-icon" href="./sinopsis_new.php?id='.$row["id"].'" target="_self"></a>';
                  echo '<p class="ngihaflix-card-text text-white">'.$row["Title"].'</p>';
                  echo '</div>';
                  echo '</section>';
                  echo '<section class="d-flex align-items-center justify-content-between" >';
                  echo '<p class="ngihaflix-card-text m-0 text-white">Rating: </p>';
                  echo '<span class="ngihaflix-card-text m-0" style="color: rgb(0, 186, 0);">'.$row["Rating"].'</span>';
                  echo '<span class="border ngihaflix-card-text p-1 text-white">'.$row["Quality"].'</span>';
                  echo '</section>';
                  echo '<span class="ngihaflix-card-text text-white">'.$row["Genre"].'</span>';
                  echo '</div>';
                  echo '</div>';
                }
              }
              else {
                echo '<div class="card" >';
                echo '<img src="./logo.png" class="card-img-top" alt="...">';
                echo '<div class="card-body">'; 
                echo '<section class="d-flex justify-content-between">';
                echo '<div>';
                echo '<i class="bi bi-play-circle-fill card-icon"  ></i>';
                echo '<i  class="bi bi-plus-circle card-icon"></i>';
                echo '</div>';
                echo '<div>';
                echo '<i class="bi bi-arrow-down-circle card-icon"></i>';
                echo '</div>';
                echo '</section>';
                echo '<section class="d-flex align-items-center justify-content-between" >';
                echo '<p class="ngihaflix-card-text m-0" style="color: rgb(0, 186, 0);"></p>';
                echo '<span class="m-2 ngihaflix-card-text text-white">JUDUL</span> <span class="border ngihaflix-card-text p-1 text-white">HD</span>';
                echo '</section>';
                echo '<span class="ngihaflix-card-text text-white">GENRE</span>';
                echo '</div>';
                echo '</div>';
              }
              $conn_->close();       
            ?>
          
                </section>
              </div>
              <!-- trending end -->

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        </div>


        <?php 
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "ngihaflix";
          // Create connection
          $connGenre = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($connGenre->connect_error) {
            die("Connection failed: " . $connGenre->connect_error);
          }
          $sql = "SELECT Id, Name FROM ngihagenre";
          $resultGenre = $connGenre->query($sql);
          if ($resultGenre->num_rows > 0) {
            // output data of each row
            while($Genre = $resultGenre->fetch_assoc()) {
              echo '<div class="container-fluid  slide2">';
              echo '<section class="d-flex justify-content-between margin-right margin-title">';
              echo '<p class="text-white"> <b>'.$Genre["Name"].'</b> </p>';
              echo '<div class="">';
              echo '<button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active tab-change-btn" aria-current="true" aria-label="Slide 1"></button>';
              echo '<button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>';
              echo '<button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>';
              echo '</div>';
              echo '</section>';
              echo '<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">';
                
              echo '<div class="carousel-inner" style="position: relative; overflow: visible;">';
              echo '<div class="carousel-item active">';
              echo '<section class="d-flex" >';
                        
              // Create connection
              $conn_ = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn_->connect_error) {
                die("Connection failed: " . $conn_->connect_error);
              }
              $sql = "SELECT id, Picture, Title, Genre, Rating, Quality FROM ngihamovie Where Genre like '%". $Genre["Name"]."%' ORDER BY ReleaseDate DESC";
              $result = $conn_->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                $x = 0;
                while($row = $result->fetch_assoc()) {
                  $x = $x + 1;
                  if ($x > 5) break;

                  echo '<div class="card" >';
                  echo '<img src="./POSTER/'.$row["Picture"].'" class="card-img-top" alt="...">';
                  echo '<div class="card-body">'; 
                  echo '<section class="d-flex justify-content-between">';
                  echo '<div>';
                  echo '<a class="bi bi-play-circle-fill card-icon" href="./sinopsis_new.php?id='.$row["id"].'" target="_self"></a>';
                  echo '<p class="ngihaflix-card-text text-white">'.$row["Title"].'</p>';
                  echo '</div>';
                  echo '</section>';
                  echo '<section class="d-flex align-items-center justify-content-between" >';
                  echo '<p class="ngihaflix-card-text m-0 text-white">Rating: </p>';
                  echo '<span class="ngihaflix-card-text m-0" style="color: rgb(0, 186, 0);">'.$row["Rating"].'</span>';
                  echo '<span class="border ngihaflix-card-text p-1 text-white">'.$row["Quality"].'</span>';
                  echo '</section>';
                  echo '<span class="ngihaflix-card-text text-white">'.$row["Genre"].'</span>';
                  echo '</div>';
                  echo '</div>';
                }
              }
              else {
                echo '<div class="card" >';
                echo '<img src="./logo.png" class="card-img-top" alt="...">';
                echo '<div class="card-body">'; 
                echo '<section class="d-flex justify-content-between">';
                echo '<div>';
                echo '<i class="bi bi-play-circle-fill card-icon"  ></i>';
                echo '<i  class="bi bi-plus-circle card-icon"></i>';
                echo '</div>';
                echo '<div>';
                echo '<i class="bi bi-arrow-down-circle card-icon"></i>';
                echo '</div>';
                echo '</section>';
                echo '<section class="d-flex align-items-center justify-content-between" >';
                echo '<p class="ngihaflix-card-text m-0" style="color: rgb(0, 186, 0);"></p>';
                echo '<span class="m-2 ngihaflix-card-text text-white">JUDUL</span> <span class="border ngihaflix-card-text p-1 text-white">HD</span>';
                echo '</section>';
                echo '<span class="ngihaflix-card-text text-white">GENRE</span>';
                echo '</div>';
                echo '</div>';
              }
              $conn_->close();       

              echo '</section>';
              echo '</div>';
              echo '</div>';
              echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">';
              echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
              echo '<span class="visually-hidden">Previous</span>';
              echo '</button>';
              echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">';
              echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
              echo '<span class="visually-hidden">Next</span>';
              echo '</button>';
              echo '</div>';
              echo '</div>';
          }
        }
        else {
        }
          $connGenre->close();       
        ?>

      <!-- footer  -->
      <div class="container footer">
          <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                  <div class="col-md-3">
                        <ul>
                          <li>Audio and Subtitle</li>
                          <li>Media Center</li>
                          <li>Privacy</li>
                          <li>Contact Us</li>
                        </ul>
                  </div>
                  <div class="col-md-3">
                    <ul>
                      <li>Audio description</li>
                      <li>Investor Relation</li>
                      <li>Terms and Conditions</li>
                      <li>Legal Notices</li>
                    </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>Help Center</li>
                  <li>Jobs</li>
            
                </ul>
               </div>
               <div class="col-md-3">
                <ul>
                  <li>Gift card</li>
                  <li>Subscription</li>
            
                </ul>
               </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-10 mx-auto">
              <div class="row">
               
                <div class="col">
                  <p class="copy-right">@ngihaflix copyright</p>
                </div>
              </div>
            </div>
          </div>
      </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <script src="./javaScript.js"></script>
  </body>
</html>