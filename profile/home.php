<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Upload image, display, edit and delete in PHP </title>
    <style>
           table {
      border-collapse: collapse;
      /* Collapse borders into a single border */
      width: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  table,th,td {
      border: 2px solid grey;
      /* Set border for table, th, and td elements */
      padding: 10px;
      /* Add padding to th and td elements for spacing */
      text-align: left;
      /* Align text to the left */
}
    </style>
</head>

<body>
    <div class="container_display">
        
        <?php
        if (isset($_GET['image_success'])) {
            echo '<div class="success">Image Uploaded successfully</div>';
        }

        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'saved') {
                echo '<div class="success">Saved </div>';
            } elseif ($action == 'deleted') {
                echo '<div class="success">Image Deleted Successfully ... </div>';
            }
        }
        ?>
        <table cellpadding="10">
            <tr>
                <th>Image</th>
                <th>Description</th>
                <th>Skills</th>
                <th>CV Link</th>
            </tr>
            <?php $res = mysqli_query($db, "SELECT* from about where id=1");
            while ($row = mysqli_fetch_array($res)) {
                ?>
                <tr> 
                  <td><img src="uploads/<?php echo $row['image'] ;?>" width="200" height="200"></td> 
                  <td><?php echo $row['description']; ?></td> 
                  <td><?php echo $row['skills']; ?></td> 
                  <td><?php echo $row['cv_link']; ?></td> 
                  <td><a href="edit.php?id='<?php echo $row['id'];?>'"><button class="btn-primary">Edit </button></a>
                  </td> 
				</tr>

            <?php } ?>

        </table>
    </div>
</body>

</html>