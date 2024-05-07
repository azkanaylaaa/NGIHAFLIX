
<?php
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE_NAME", "ngihaflix");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngihaflix";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->close();

// Create connection
// $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
// $conn = mysqli_connect("localhost", "root", "", "ngihaflix");
?>