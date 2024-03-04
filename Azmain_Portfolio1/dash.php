<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0; /* Remove default margin */
            padding: 0;
            background-color: #ecf0f1; /* Set background color */
        }

        h1 {
            color: #3498db; /* Set the color for the welcome message */
            margin-bottom: 20px; /* Add margin at the bottom of the welcome message */
        }

        a, button {
            display: block; /* Use block-level elements for full width */
            width: 100%; /* Make elements fill the width */
            box-sizing: border-box; /* Include padding and border in the element's total width */
            padding: 20px;
            margin: 10px 0; /* Adjust vertical margin */
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        a:hover, button:hover {
            background-color: #2980b9;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>
    <a href="profile/home.php">Edit About</a>
    <a href="projects/home.php">Edit Projects</a>
    <button onclick="location.href='edit_curriculum.php'">Edit Curriculum</button>
    <button onclick="location.href='music.php'">Edit Music</button>
</body>
</html>
