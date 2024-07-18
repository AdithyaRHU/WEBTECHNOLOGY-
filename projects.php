<?php
include 'db.php';

// Fetch existing projects
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Projects Page</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-image: url('https://images.unsplash.com/photo-1491947153227-33d59da6c448?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); /* Premium 8K background image */
            background-size: cover; /* Ensure the background image covers the entire element */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
            background-position: center; /* Center the background image */
            background-color: #f4f4f4; /* Fallback background color */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        h1, h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        form {
            max-width: 500px;
            width: 100%;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
            height: 120px;
        }
        button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
            text-align: center;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            padding: 10px 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #e9ecef;
        }
        .projects-list {
            max-width: 500px;
            width: 100%;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .project-item {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }
        .project-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <h1>Projects</h1>
    <form action="save_project.php" method="post">
        <input type="text" name="project_name" placeholder="Project Name" required>
        <textarea name="project_description" placeholder="Project Description" required></textarea>
        <button type="submit">Add Project</button>
    </form>

    <h2>Existing Projects</h2>
    <div class="projects-list">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='project-item'>Project: " . htmlspecialchars($row["project_name"]) . "<br>";
                echo "Description: " . htmlspecialchars($row["project_description"]) . "</div><br>";
            }
        } else {
            echo "<div class='project-item'>No projects found</div>";
        }
        ?>
    </div>

    <a href="profile.php">Back to Profile</a>
</body>
</html>
