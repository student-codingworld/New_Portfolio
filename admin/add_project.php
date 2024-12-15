<?php
include '../db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    // Handle image upload
    $targetDir = "../assets/images/";
    $imageName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $imageName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        $sql = "INSERT INTO projects (title, description, image, link) 
                VALUES ('$title', '$description', '$imageName', '$link')";

        if ($conn->query($sql) === TRUE) {
            // Success case: Alert and redirect to logout
            echo "<script>
                    alert('Project added successfully.');
                    window.location.href = 'logout.php';
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Image upload failed.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Submission</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Project Title" required><br>
        <textarea name="description" placeholder="Project Description" required></textarea><br>
        <input type="file" name="image" required><br>
        <input type="url" name="link" placeholder="Project Link" required><br>
        <button type="submit">Submit Project</button>
    </form>
</body>
</html>
