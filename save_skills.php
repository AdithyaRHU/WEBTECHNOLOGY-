<?php
include 'db.php';

$skill_name = $conn->real_escape_string($_POST['skill_name']);
$skill_level = $conn->real_escape_string($_POST['skill_level']);

$sql = "INSERT INTO skills (skill_name, skill_level) VALUES ('$skill_name', '$skill_level')";

if ($conn->query($sql) === TRUE) {
    echo "Skill saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: skills.php");
exit();
?>