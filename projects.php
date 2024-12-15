<?php include 'includes/header.php'; ?>

<div class="projects-section py-5">
    <div class="container">
        <h1 class="text-center">My Projects</h1>
        <div class="row mt-4">
            <?php
            include 'db_config.php';

            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <div class='col-md-4'>
                        <div class='card mb-4'>
                            <img src='assets/images/{$row['image']}' class='card-img-top' alt='{$row['title']}'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$row['title']}</h5>
                                <p class='card-text'>".substr($row['description'], 0, 100)."...</p>
                                <a href='project_details.php?id={$row['id']}' class='btn btn-primary'>View Details</a>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<p class='text-center'>No projects available at the moment.</p>";
            }
            ?>
        </div>
    </div>
</div>

<!-- Admin Login Button -->
<div id="admin-login-button" style="position: fixed; bottom: 10px; right: 10px; z-index: 999;">
    <a href="admin/admin_login.php" class="btn btn-sm btn-primary" style="opacity: 0.7;">Admin Login</a>
</div>

<script>
    // Hide the admin login button after 5 seconds
    setTimeout(() => {
        const adminButton = document.getElementById('admin-login-button');
        if (adminButton) {
            adminButton.style.display = 'none';
        }
    }, 5000);
</script>

<?php include 'includes/footer.php'; ?>
