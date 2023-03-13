<?php
// Get the user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Check if the username and password match a row in the database
$sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Login successful
    echo "Login successful.";
} else {
    // Login failed
    echo "Invalid username or password.";
}

mysqli_close($conn);
?>
