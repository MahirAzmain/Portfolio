<!-- Include your HTML header here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Curriculum</title>
</head>
<body>

<?php
include ('connect.php');

// Your PHP code that requires a database connection goes here

// Close the database connection when you are done

// Function to sanitize input data
function sanitize_input($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Education form actions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action_education"])) {
        $action_education = sanitize_input($_POST["action_education"]);
        if ($action_education === "add") {
            // Process add education
            $education_title = sanitize_input($_POST["education_title"]);
            $education_institute = sanitize_input($_POST["education_institute"]);
            $education_description = sanitize_input($_POST["education_description"]);

            $sql = "INSERT INTO education (tittle, institute, description) VALUES ('$education_title', '$education_institute', '$education_description')";
            $result = $conn->query($sql);
        } elseif ($action_education === "update") {
            // Process update education
            // Implement update logic based on your requirements
        } elseif ($action_education === "delete") {
            // Process delete education
            // Implement delete logic based on your requirements
        }
    }

    // Experience form actions
    if (isset($_POST["action_experience"])) {
        $action_experience = sanitize_input($_POST["action_experience"]);
        if ($action_experience === "add") {
            // Process add experience
            $experience_title = sanitize_input($_POST["experience_title"]);
            $experience_company = sanitize_input($_POST["experience_company"]);
            $experience_description = sanitize_input($_POST["experience_description"]);

            $sql = "INSERT INTO mahi (title, company, description) VALUES ('$experience_title', '$experience_company', '$experience_description')";
            $result = $conn->query($sql);
        } elseif ($action_experience === "update") {
            // Process update experience
            // Implement update logic based on your requirements
        } elseif ($action_experience === "delete") {
            // Process delete experience
            // Implement delete logic based on your requirements
        }
    }
}

// Close the connection
$conn->close();
?>

<!-- Add an "Edit Curriculum" button with options -->
<section id="edit-curriculum" class="edit-curriculum">
    <h2>Edit Curriculum</h2>

    <!-- Education Form -->
    <form method="post" action="edit_curriculum.php">
        <h3>Education</h3>

        <label for="education_id">ID:</label>
        <input type="text" name="education_id"> <!-- Add an ID field -->

        <label for="education_title">Title:</label>
        <input type="text" name="education_title" required>

        <label for="education_institute">Institute:</label>
        <input type="text" name="education_institute" required>

        <label for="education_description">Description:</label>
        <textarea name="education_description" required></textarea>

        <!-- Include hidden field to specify the action -->
        <input type="hidden" name="action_education" value="add">

        <!-- Include buttons for Add, Update, and Delete actions -->
        <button type="submit">Add</button>
        <button type="button" onclick="updateEducation()">Update</button>
        <button type="button" onclick="deleteEducation()">Delete</button>
    </form>

    <!-- Experience Form -->
    <form method="post" action="edit_curriculum.php">
        <h3>Experience</h3>

        <label for="experience_id">ID:</label>
        <input type="text" name="experience_id"> <!-- Add an ID field -->

        <label for="experience_title">Title:</label>
        <input type="text" name="experience_title" required>

        <label for="experience_company">Company:</label>
        <input type="text" name="experience_company" required>

        <label for="experience_description">Description:</label>
        <textarea name="experience_description" required></textarea>

        <!-- Include hidden field to specify the action -->
        <input type="hidden" name="action_experience" value="add">

        <!-- Include buttons for Add, Update, and Delete actions -->
        <button type="submit">Add</button>
        <button type="button" onclick="updateExperience()">Update</button>
        <button type="button" onclick="deleteExperience()">Delete</button>
    </form>
</section>

<!-- Include your HTML footer here -->
<script>
    // JavaScript functions for handling update and delete actions
    function updateEducation() {
        document.getElementsByName("action_education")[0].value = "update";
        document.forms[0].submit();
    }

    function deleteEducation() {
        document.getElementsByName("action_education")[0].value = "delete";
        document.forms[0].submit();
    }

    function updateExperience() {
        document.getElementsByName("action_experience")[0].value = "update";
        document.forms[1].submit();
    }

    function deleteExperience() {
        document.getElementsByName("action_experience")[0].value = "delete";
        document.forms[1].submit();
    }
</script>
</body>
</html>
