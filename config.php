 <?php
//  require "console.php";
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "fuel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 