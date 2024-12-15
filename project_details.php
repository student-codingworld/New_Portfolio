<?php 
include 'includes/header.php'; 
include 'db_config.php';

if (isset($_GET['id'])) {
    $project_id = $_GET['id'];
    $sql = "SELECT * FROM projects WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $project = $result->fetch_assoc();
    
    if ($project) {
        echo "
        <div class='project-details-section py-5'>
            <div class='container'>
                <h1 class='text-center'>{$project['title']}</h1>
                <div class='row mt-4'>
                    <div class='col-md-6'>
                        <img src='assets/images/{$project['image']}' alt='{$project['title']}' class='img-fluid rounded shadow'>
                    </div>
                    <div class='col-md-6'>
                        <p>{$project['description']}</p>
                        <a href='{$project['link']}' class='btn btn-primary' target='_blank'>Visit Project</a>
                    </div>
                </div>
            </div>
        </div>";
    } else {
        echo "<p class='text-center'>Project not found.</p>";
    }
} else {
    echo "<p class='text-center'>Invalid project ID.</p>";
}

include 'includes/footer.php'; 
?>
