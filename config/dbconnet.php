<? php
    <?php
$servername = "localhost";
$username = "reginaca_dpharm";
$password = "123dpharm";
$database = "reginaca_dpharmacy";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connected successfully";
}

?>

?>