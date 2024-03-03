<?php require_once("config.php");
$id = $_GET['id']; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="section_styles.css">
	<title>Image Upload and edit in PHP and MYSQL database</title>
	
</head>

<body>
	<?php
	if (isset($_POST['update_submit'])) {
		$title=$_POST['title'];
        $image=$_POST['image'];
        $description=$_POST['description'];
        $weblink=$_POST['weblink'];
        $demolink=$_POST['demolink'];

		$folder = "uploads/";
		$image_file = $_FILES['image']['name'];
		$file = $_FILES['image']['tmp_name'];
		$path = $folder . $image_file;
		$target_file = $folder . basename($image_file);
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		if ($file != '') {
			//Set image upload size 
			if ($_FILES["image"]["size"] > 5000000) {
				$error[] = 'Sorry, your image is too large. Upload less than 5000 KB in size.';
			}
			//Allow only JPG, JPEG, PNG & GIF 
			if (
				$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif"
			) {
				$error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
			}
		}
		if (!isset($error)) {
			if ($file != '') {
				$res = mysqli_query($db, "SELECT* from projects WHERE id=$id limit 1");
				if ($row = mysqli_fetch_array($res)) {
					$deleteimage = $row['image'];
				}
				unlink($folder . $deleteimage);
				move_uploaded_file($file, $target_file);
				$result = mysqli_query($db, "UPDATE projects SET image='$image_file',title='$title',description='$description',weblink='$weblink',demolink='$demolink' WHERE id=$id");
			} else {
				$result = mysqli_query($db, "UPDATE projects SET title='$title',description='$description',weblink='$weblink',demolink='$demolink' WHERE id=$id");
			}
			if ($result) {
				header("location:home.php?action=saved");
			} else {
				echo 'Something went wrong';
			}
		}
	}


	if (isset($error)) {

		foreach ($error as $error) {
			echo '<div class="message">' . $error . '</div><br>';
		}
	}
	$res = mysqli_query($db, "SELECT* from projects WHERE id=$id limit 1");
	if ($row = mysqli_fetch_array($res)) {
		$image = $row['image'];
		$title=$row['title'];
		$description=$row['description'];
        $weblink=$row['weblink'];
        $demolink=$row['demolink'];
	}
	?>
	<div class="container_section" style="width:500px;">
		<h1> Edit </h1>
		<?php if (isset($update_sucess)) {
			echo '<div class="success">Project Updated successfully</div>';
		} ?>
		<form action="" method="POST" enctype="multipart/form-data">
			<label>Project Image</label><br>
			<img src="uploads/<?php echo $image; ?>" height="100px" width="150px"><br>
			<label>Change Project Image </label>
			<input type="file" name="image" class="form-control">
			<label>Project Name</label>
			<input type="text" name="title" value="<?php echo $title; ?>" class="form-control">
			<label>Description</label>
			<input type="text" name="description" value="<?php echo $description; ?>" class="form-control">
			<label>Weblink</label>
			<input type="text" name="weblink" value="<?php echo $weblink; ?>" class="form-control">
			<label>Demolink</label>
			<input type="text" name="demolink" value="<?php echo $demolink; ?>" class="form-control">
			<br><br>
			<button name="update_submit" class="btn-primary">Update</button>
		</form>
	</div>
</body>

</html>