<?php
include('connect.php');



// Function to sanitize input data
function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags($data));
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        // Add new entry
        $id = sanitizeInput($_POST['id']);
        $link = sanitizeInput($_POST['link']);

        $addSql = "INSERT INTO music (id, link) VALUES ('$id', '$link')";
        if ($conn->query($addSql) === TRUE) {
            echo "New record added successfully";
        } else {
            echo "Error: " . $addSql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['update'])) {
        // Update existing entry
        $id = sanitizeInput($_POST['id']);
        $link = sanitizeInput($_POST['link']);

        $updateSql = "UPDATE music SET link='$link' WHERE id='$id'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } elseif (isset($_POST['delete'])) {
        // Delete entry
        $id = sanitizeInput($_POST['id']);

        $deleteSql = "DELETE FROM music WHERE id='$id'";
        if ($conn->query($deleteSql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

// Fetch playlist links from the 'music' table
$sql = "SELECT id, link FROM music";
$result = $conn->query($sql);

// Output HTML with dynamic playlist links and form
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Music Playlist</title>
</head>

<body>
    <section class="music section">
        <h2 class="section__title-2">
            <span>Music.<i class="ri-spotify-line"></i></span>
        </h2>
        <p class="music__title-sub">
            I love listening to music, it helps me relax and focus on my work.
            Here are some of my favorite songs.
        </p>
        <div class="music__container container grid">';

// Loop through the database results and generate dynamic HTML
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $title = "Playlist " . $row["id"]; // You can modify this title as needed
        $url = $row["link"];

        echo '<div class="music__box" id="music-box-' . strtolower(str_replace(' ', '-', $title)) . '">';
        echo '<iframe title="' . $title . '" style="border-radius: 12px" src="' . $url . '" width="100%" height="410" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
        echo '</div>';
    }
} else {
    echo "0 results found in the 'music' table.";
}

// Close the dynamic HTML structure and add the form
echo '</div>
    </section>

    <section class="form section">
        <h2 class="section__title-2">
            <span>Manage Playlist</span>
        </h2>
        <form method="post" action="">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" required>

            <label for="link">Link:</label>
            <input type="text" name="link" id="link" required>

            <button type="submit" name="add">Add</button>
            <button type="submit" name="update">Update</button>
            <button type="submit" name="delete">Delete</button>
        </form>
    </section>
</body>

</html>';

// Close the database connection
$conn->close();
?>
