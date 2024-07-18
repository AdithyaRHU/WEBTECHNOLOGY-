<?php
// Include database connection
include 'db.php';

// Query to retrieve user projects data (assuming you have a table named 'projects')
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Project Name: " . $row["project_name"]. "<br>";
        echo "Project Description: " . $row["project_description"]. "<br>";
        // Add more fields as needed
    }
} else {
    echo "No projects found";
}
$conn->close();
?>