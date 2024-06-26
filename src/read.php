<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "nish";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all user details from the database
$sql = "SELECT * FROM nish";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>All User quations from our databse</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>EMAIL</th></tr>";

    // Output data for each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No user quations found.";
}

// Close the database connection
mysqli_close($conn);
?>

<style>
    table {
        border: 1px solid #ddd;
        border-collapse: collapse;
        width: 100%;
    }
    
    table th, table td {
        padding: 8px;
        text-align: left;
        border-bottom: 10px solid #ddd;
       
    }
    
    table th {
        background-color: #f2f2f2;
    }
    
    
</style>