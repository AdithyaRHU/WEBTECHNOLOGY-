<?php
include 'db.php';

$fullname = $conn->real_escape_string($_POST['fullname']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "INSERT INTO profiles (fullname, email) VALUES ('$fullname', '$email') ON DUPLICATE KEY UPDATE fullname = '$fullname', email = '$email'";

if ($conn->query($sql) === TRUE) {
    echo "Profile saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: profile.php");
exit();
?>