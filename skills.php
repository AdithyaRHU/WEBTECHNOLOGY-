<?php
include 'db.php';

// Fetch existing skills
$sql = "SELECT * FROM skills";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Skills Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-image: url('https://images.unsplash.com/uploads/141103282695035fa1380/95cdfeef?q=80&w=1430&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); /* Set your 8K background image here */
            background-size: cover; /* This ensures the background image covers the entire element */
            background-repeat: no-repeat; /* This prevents the background image from repeating */
            background-position: center; /* This centers the background image */
            background-color: #f4f4f4; /* Fallback background color */
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1, h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 10px;
            border-radius: 5px;
        }
        form {
            max-width: 400px;
            width: 100%;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        input[type="text"] {
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
            display: block;
            margin-top: 20px;
            color: #337ab7;
            text-decoration: none;
            text-align: center;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 10px;
            border-radius: 5px;
        }
        a:hover {
            text-decoration: underline;
        }
        .skills-list {
            max-width: 400px;
            width: 100%;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .skill-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .skill-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <h1>Skills</h1>
    <form action="save_skills.php" method="post">
        <input type="text" name="skill_name" placeholder="Skill Name" required>
        <input type="text" name="skill_level" placeholder="Skill Level" required>
        <button type="submit">Add Skill</button>
    </form>

    <h2>Existing Skills</h2>
    <div class="skills-list">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='skill-item'>Skill: " . htmlspecialchars($row["skill_name"]) . " - Level: " . htmlspecialchars($row["skill_level"]) . "</div>";
            }
        } else {
            echo "<div class='skill-item'>No skills found</div>";
        }
        ?>
    </div>

    <a href="profile.php">Back to Profile</a>
</body>
</html>
