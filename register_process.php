<?php
// Get the user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the MySQL database
$conn = mysqli_connect('127.0.0.1', 'root', 'root', 'simplePage', '8889');
//die('con');
// Check if the username already exists in the database
$sql = "SELECT id FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
//die($conn);
if (mysqli_num_rows($result) > 0) {
    // The username already exists
    echo "Username already taken.";
} else {
    // Insert the new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $sql);
    echo "Registration successful.";
}

mysqli_close($conn);
?>