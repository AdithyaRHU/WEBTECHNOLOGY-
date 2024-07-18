<?php
include 'db.php';
$profile = null;

// Fetch existing profile
$sql = "SELECT * FROM profiles LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $profile = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1488998427799-e3362cec87c3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover; /* This ensures the background image covers the entire element */
            background-repeat: no-repeat; /* This prevents the background image from repeating */
            background-position: center; /* This centers the background image */
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #337ab7;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Profile</h1>
    <form action="save_profile.php" method="post">
        <input type="text" name="fullname" placeholder="Full Name" required value="<?php echo $profile ? htmlspecialchars($profile['fullname']) : ''; ?>">
        <input type="email" name="email" placeholder="Email" required value="<?php echo $profile ? htmlspecialchars($profile['email']) : ''; ?>">
        <button type="submit">Save Profile</button>
    </form>
    <div style="text-align: center; margin-top: 20px;">
        <a href="skills.php" style="margin-right: 10px;">Manage Skills</a>
        <a href="projects.php">Manage Projects</a>
    </div>
</body>
</html>