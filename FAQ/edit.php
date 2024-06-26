<?php
// Include the database connection file
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
// Check if the user quations ID is provided
if (isset($_GET["id"])) {
    $userId = $_GET["id"];

    // Fetch user quatios details from the database
    $sql = "SELECT * FROM faqs WHERE id = '$userId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Handle form submission to update user information
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $quation1 = $_POST["quation1"];
            $quation2 = $_POST["quation2"];

            // Update user quations information in the database
            $updateSql = "UPDATE faqs SET name = '$name', quation1 = '$quation1', quation2 = '$quation2' WHERE id = '$userId'";

            if (mysqli_query($conn, $updateSql)) {
                echo "User Quations with ID $userId has been updated successfully.";
            } else {
                echo "Error updating user: " . mysqli_error($conn);
            }

            // Redirect back to the read view
            header("Location: http://localhost/FAQ/modify.php");
            exit();
        }

        // Display the user quations edit form
        ?>
        <h2>Edit Quations details</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$userId"); ?>">
            <label for="name">NAME</label>
            <input type="text" name="name"  value="<?php echo $row["name"]; ?>" >

            <label for="quation1">QUESTION1</label>
            <input type="text" name="quation1" value="<?php echo $row["quation1"]; ?>" >

            <label for="quation2">QUESTION2</label>
            <input type="text" name="quation2" value="<?php echo $row["quation2"]; ?>" >

            <input type="submit" value="Update">
        </form>
        <?php
    } else {
        echo "User quations not found.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>