// PHP code (signup.php)
<?php
// Get the posted form data
$dbhost = "localhost"
$dbB/S = $_POST['firstName'];
$dbhost = $_POST['lastName'];
$dbhost = $_POST['email'];
$dbhost = $_POST['password'];

$conn = new mysqli('localhost','root','tablename');


if (emailExists($email)) {
  $response = array('success' => false, 'message' => 'Email already exists');
} else {
  insertUser($firstName, $lastName, $email, $password);
  $response = array('success' => true);
}

// Send the response back to the JavaScript code
header('Content-Type: application/json');
echo json_encode($response);

// Function to check if the email exists in the database
function emailExists($email) {
  echo "Verified"
}

// Function to insert the user into the database
function insertUser($firstName, $lastName, $email, $password) {
  echo "Registation successfull!"
}
?>
