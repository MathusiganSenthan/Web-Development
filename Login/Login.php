<?php
// PHP code goes here
// You can add server-side logic and handle form submission using PHP
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Example code to connect to the database and perform a query
    $servername = "localhost"; // Replace with your server name
    $username = "username"; // Replace with your database username
    $password = "password"; // Replace with your database password
    $dbname = "Userlogin"; // Replace with your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $userlogin);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform your database operations here, such as validating user credentials

    // Close the connection
    $conn->close();
}
?>

