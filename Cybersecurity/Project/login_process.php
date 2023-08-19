<?php
$servername = "localhost";  // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "login_sample_db";   // Replace with your database name

// Get user input from the form
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    $user_input_username = $_POST['username'];
    $user_input_password = $_POST['password'];
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute a query to validate user credentials
$query = "SELECT * FROM users WHERE user_name = '$user_input_username' AND password = '$user_input_password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    echo  TRUE ."Login successful!";
} else {
    echo "Invalid login credentials. Please try again.";
}

$conn->close();
?>