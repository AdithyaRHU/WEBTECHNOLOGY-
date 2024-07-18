<?php
include 'db.php';

$project_name = $conn->real_escape_string($_POST['project_name']);
$project_description = $conn->real_escape_string($_POST['project_description']);

$sql = "INSERT INTO projects (project_name, project_description) VALUES ('$project_name', '$project_description')";

if ($conn->query($sql) === TRUE) {
    echo "Project saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: projects.php");
exit();
?>