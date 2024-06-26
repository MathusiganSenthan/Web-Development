<!DOCTYPE html>
<html>

<head>
    <title>Property Sale - Payment Page</title>
    <link rel="stylesheet" type="text/css" href="payment.css">
    <script>
  document.getElementById("payment-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Perform any necessary validation here

    // Display the success alert
    alert("Payment successful!");

    // Optionally, you can submit the form programmatically after displaying the alert
    // event.target.submit();
  });
</script>
</head>
<body>
<header>
            <nav>
                <div class><img src="images/Logo.png" alt="Logo" style="width: 500px; height: auto;"></div>
                <div class="menu">
                    <a href="http://localhost/src/index.html" class="navline">Home</a>
                    <a href="index.html"class="navline">Homes & Appartment</a>
                    <a href="index.html"class="navline">Lands</a> 
                    <a href="index.html"class="navline">Rentals</a>
                    <a href="index.html"class="navline">About Us</a>
                    <a href="index.html"class="navline">Post AdS</a>
                    <a href="index.html"><img src="images/Signin.png" alt="Login Button"  style="width: 100px; height:auto;"></a><br>
                    <a href="index.html"><img src="images/Signup.png" alt="signUP logo" style="width: 100px; height: auto;"></a>
                </div>
            </nav>
        </header>     

    <h1>Property Sale - Payment Page</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <form id="payment-form">
            <label for="card_number">Card Number</label>
            <input type="number" name="card_number" required>

            <label for="expiry">Expiry Date</label>
            <input type="date" name="expiry" required>

            <label for="cvv">CVV</label>
            <input type="number" name="cvv" required>

            <label for="email">Email</label>
            <input type="text" name="email" required>

            <input type="submit" value="Pay Now">
        </form>
        <div class="mathu">
        <button> <a href="http://localhost/payment/read.php"> See All Data</a></button>
        <button> <a href="http://localhost/payment/modify.php"> Modify Data</a></button> 
        </div>


</body>

</html>



<?php
//detabase code
// Establish a connection to the HySQL database
$host = "localhost";
$username = "root";
$password = ""; 
$database = "payment";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

// Handle fore submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {


// Get form data
$card_number = $_POST["card_number"]??"";
$expiry = $_POST["expiry"]??"";
$cvv = $_POST["cvv"]??"";
$email = $_POST["email"]??"";

// Save user information into the database

$sql = "INSERT INTO payment ( card_number, expiry, cvv, email) VALUES ( '$card_number', '$expiry', '$cvv', '$email')";

if (mysqli_query($conn, $sql)) {
echo "payment successful!";
} else {
    echo "Error: " . $sql . "<br>" .mysqli_error($conn);
}

//close the database connection
mysqli_close($conn);
}
?>
