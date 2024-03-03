<?php
require_once("config.php");

if (isset($_POST['update_submit'])) {
    $description = $_POST['description'];
    $skills = $_POST['skills'];
    $cv_link = $_POST['cv_link'];
    $folder = "uploads/";
    $image_file = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $target_file = $folder . basename($image_file);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    if ($file != '') {
        // Set image upload size
        if ($_FILES["image"]["size"] > 50000000) {
            $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
        }
        // Allow only JPG, JPEG, PNG & GIF
        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
        }
    }

    if (!isset($error)) {
        if ($file != '') {
            $res = mysqli_query($db, "SELECT * FROM about WHERE id=1");
            if ($row = mysqli_fetch_array($res)) {
                $deleteimage = $row['image'];
                unlink($folder . $deleteimage);
            }

            move_uploaded_file($file, $target_file);
            $result = mysqli_query($db, "UPDATE about SET image='$image_file',description='$description',skills='$skills',cv_link='$cv_link' WHERE id=1");
        } else {
            $result = mysqli_query($db, "UPDATE about SET description='$description',skills='$skills',cv_link='$cv_link' WHERE id=1");
        }

        if ($result) {
            header("location:home.php?action=saved");
            exit();
        } else {
            echo 'Something went wrong: ' . mysqli_error($db);
        }
    }
}

if (isset($error)) {
    foreach ($error as $err) {
        echo '<div class="message">' . $err . '</div><br>';
    }
}

$res = mysqli_query($db, "SELECT * FROM about WHERE id=1");
if ($row = mysqli_fetch_array($res)) {
    $image = $row['image'];
    $description = $row['description'];
    $skills = $row['skills'];
    $cv_link = $row['cv_link'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit About</title>
</head>

<body>
    <div class="container" style="width:500px;">
        <h1> Edit </h1>
        <?php if (isset($update_sucess)) {
            echo '<div class="success">Image Updated successfully</div>';
        } ?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <label>Image Preview </label><br>
            <img src="uploads/<?php echo $image; ?>" height="100"><br>
            <label>Change Image </label>
            <input type="file" name="image" class="form-control">
            <label>Description</label>
            <input type="text" name="description" value="<?php echo $description; ?>" class="form-control">

            <label>Skills</label>
            <input type="text" name="skills" value="<?php echo $skills; ?>" class="form-control">

            <label>CV Link</label>
            <input type="text" name="cv_link" value="<?php echo $cv_link; ?>" class="form-control">
            <br><br>
            <button name="update_submit" class="btn-primary">Update </button>
        </form>
    </div>
</body>

</html>
