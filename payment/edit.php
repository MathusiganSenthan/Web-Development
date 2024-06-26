<?php
// Include the database connection file
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
// Check if the userpayment ID is provided
if (isset($_GET["id"])) {
    $userpaymentId = $_GET["id"];

    // Fetch userpayment details from the database
    $sql = "SELECT * FROM payment WHERE id = '$userpaymentId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Handle form submission to update user information
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $card_number = $_POST["card_number"];
            $expiry = $_POST["expiry"];
            $cvv = $_POST["cvv"];
            $email = $_POST["email"];

            // Update userpayment information in the database
            $updateSql = "UPDATE payment SET card_number = '$card_number', expiry = '$expiry', cvv = '$cvv', email = '$email' WHERE id = '$userpaymentId'";

            if (mysqli_query($conn, $updateSql)) {
                echo "Userpayment with ID $userpaymentId has been updated successfully.";
            } else {
                echo "Error updating user: " . mysqli_error($conn);
            }

            // Redirect back to the read view
            header("Location: http://localhost/payment/modify.php");
            exit();
        }

        // Display the userpayment edit form
        ?>
        <h2>Edit Paymentdetails</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$userpaymentId"); ?>">
            <label for="card_number">Card Number</label>
            <input type="number" name="card_number"  value="<?php echo $row["card_number"]; ?>" required>

            <label for="expiry">Expiry Date</label>
            <input type="date" name="expiry" value="<?php echo $row["expiry"]; ?>" required>

            <label for="cvv">CVV</label>
            <input type="number" name="cvv" value="<?php echo $row["cvv"]; ?>" required>

            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $row["email"]; ?>" required>

            <input type="submit" value="Update">
        </form>
        <?php
    } else {
        echo "Userpayment not found.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>


