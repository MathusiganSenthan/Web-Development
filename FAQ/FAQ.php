<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Property Sales FAQ</title>
    <link rel="stylesheet" type="text/css" href="FAQ.css">
</head>

</body>

    <h1>property sale FAQ</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <form id="FAQ">
        <label for="name">NAME</label>
        <input type="text" name="name">

        <label for="quation1">QUESTION1</label>
        <input type="text" name="quation1">

        <label for="quation2">QUESTION2</label>
        <input type="text" name="quation2">


        <input type="submit" value="submit Questions">
    </form>
    <div class="mathu">
    <button> <a href="http://localhost/FAQ/read.php"> See All Data</a></button>
    <button> <a href="http://localhost/FAQ/modify.php"> Modify Data</a></button>
    </div>

</body>

</html>


<?php
//detabase code
// Establish a connection to the HySQL database
$host = "localhost";
$username = "root";
$password = ""; 
$database = "faqs";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

// Handle fore submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {


// Get form data
$name = $_POST["name"]??"";
$quation1 = $_POST["quation1"]??"";
$quation2 = $_POST["quation2"]??"";

// Save user information into the database

$sql = "INSERT INTO faqs ( name, quation1, quation2) VALUES ( '$name', '$quation1', '$quation2')";

if (mysqli_query($conn, $sql)) {
echo "Quation submit!";
} else {
    echo "Error: " . $sql . "<br>" .mysqli_error($conn);
}

//close the database connection
mysqli_close($conn);
}
?>
