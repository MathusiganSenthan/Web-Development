<?php

// Database connection details

$host = "localhost";
$username = "root";
$password = "";
$database = "payment";

// Establish a connection to the MySQL database

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user payment ID is provided

if (isset($_GET["id"])) {
    $userpaymentId = $_GET["id"]; 

    // Delete the user from the database
    $sql = "DELETE FROM payment WHERE id = '$userpaymentId'";

    if (mysqli_query($conn, $sql)) {
        echo "User payment with ID $userpaymentId has been deleted successfully.";
        header("Location: http://localhost/payment/modify.php");
        exit();
    } else {
        echo "Error deleting user payment: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>
