<?php
include '../db_config.php';

// Delete project
if (isset($_GET['delete_project_id'])) {
    $project_id = $_GET['delete_project_id'];

    // Get the image name to delete it from the server
    $sql = "SELECT image FROM projects WHERE id = $project_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
        $imagePath = "../assets/images/" . $project['image'];

        // Delete the project record from the database
        $deleteSql = "DELETE FROM projects WHERE id = $project_id";
        if ($conn->query($deleteSql) === TRUE) {
            // Delete the image file from the server
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            echo "<script>
                    alert('Project deleted successfully.');
                    window.location.href = 'delete_project.php';
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #4e73df;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            text-align: center;
            padding: 15px;
            border: 1px solid #ddd;
            vertical-align: middle;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table td a {
            color: #007bff;
            text-decoration: none;
        }

        table td a:hover {
            text-decoration: underline;
        }

        /* Button Styling */
        .btn-danger {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #ff1a1a;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(255, 0, 0, 0.3);
        }

        /* Timer Styling */
        .timer {
            position: fixed;
            top: 20px;
            right: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border-radius: 8px;
        }

        /* Responsive Design for Timer */
        @media (max-width: 768px) {
            .timer {
                font-size: 1.2rem;
                top: 10px;
                right: 10px;
            }
        }

        @media (max-width: 576px) {
            .timer {
                font-size: 1rem;
                top: 10px;
                right: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Timer Display -->
    <div id="timer" class="timer">60</div>

    <div class="container">
        <h2>Manage Your Projects</h2>

        <!-- List of existing projects with delete option -->
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch and display the list of projects
                $sql = "SELECT * FROM projects";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['description'] . "</td>
                                <td><a href='" . $row['link'] . "' target='_blank'>View</a></td>
                                <td>
                                    <a href='?delete_project_id=" . $row['id'] . "' 
                                       class='btn btn-danger' 
                                       onclick='return confirm(\"Are you sure you want to delete this project?\");'>Delete</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No projects found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Set timer for 60 seconds (60000 milliseconds)
        let countdown = 60; // Countdown in seconds
        const timerElement = document.getElementById('timer');

        function startTimer() {
            let timer = setInterval(function() {
                countdown--;
                timerElement.innerHTML = countdown;
                if (countdown <= 0) {
                    clearInterval(timer);
                    window.location.href = 'admin_login.php'; // Redirect after timeout
                }
            }, 1000); // Update every second
        }

        // Start the timer when the page loads
        window.onload = function() {
            startTimer();
        };
    </script>
</body>
</html>
