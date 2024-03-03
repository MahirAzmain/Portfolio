<?php
include 'connect.php' ;

// Your PHP code that requires a database connection goes here

// Close the database connection when you are done
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center; /* Center align the form content */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 8px; /* Added margin between buttons */
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message-container {
            text-align: center;
            margin-top: 10px;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <?php
    session_start();

    $db = new mysqli('localhost', 'root', '', 'mahir');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    if (isset($_POST['login_user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = $db->query($query);

        if ($results->num_rows == 1) {
            $_SESSION['username'] = $username;
            header('location: dash.php');
            exit;
        } else {
            $loginErrorMessage = "Invalid username or password. Please try again or register.";
        }
    }

    if (isset($_POST['reg_user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
        $db->query($query);

        $_SESSION['username'] = $username;
        header('location: register.php');
    }
    ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="login_user">Login</button>
        <button type="submit" name="reg_user">Register</button>
    </form>

    <div class="error-message-container">
        <?php
        // Display the login error message
        if (isset($loginErrorMessage)) {
            echo '<p class="error-message">' . $loginErrorMessage . '</p>';
        }
        ?>
    </div>

</body>
</html>