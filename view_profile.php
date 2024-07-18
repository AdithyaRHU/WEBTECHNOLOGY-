<?php
// Include database connection
include 'db.php';

// Query to retrieve user profile data (assuming you have a table named 'profiles')
$sql = "SELECT * FROM profiles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Full Name: " . $row["fullname"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        // Add more fields as needed
    }
} else {
    echo "No profile data found";
}
$conn->close();
?>