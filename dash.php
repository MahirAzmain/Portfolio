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
            margin: 0;
            padding: 0;
            background-color: #ecf0f1;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #3498db;
            margin-bottom: 20px;
        }

        a, button {
            display: block;
            width: 100%;
            box-sizing: border-box;
            padding: 20px;
            margin: 10px 0;
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
    <div>
        <h1>Welcome to the Admin Panel</h1>
        <a href="profile/home.php">Edit About</a>
        <a href="projects/home.php">Edit Projects</a>
        <button onclick="location.href='edit_curriculum.php'">Edit Curriculum</button>
        <button onclick="location.href='music.php'">Edit Music</button>
    </div>
</body>
</html>
