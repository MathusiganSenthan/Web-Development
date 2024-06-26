<?php

// Database connection details

$host = "localhost";
$username = "root";
$password = "";
$database = "faqs";

// Establish a connection to the MySQL database

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user  ID is provided

if (isset($_GET["id"])) {
    $userId = $_GET["id"]; 

    // Delete the user from the database
    $sql = "DELETE FROM faqs WHERE id = '$userId'";

    if (mysqli_query($conn, $sql)) {
        echo "User quations with ID $userId has been deleted successfully.";
        header("Location: http://localhost/FAQ/modify.php");
        exit();
    } else {
        echo "Error deleting user quation deatails: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>
