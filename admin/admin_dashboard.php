<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Project| Pawan Patel</title>
    <link rel="stylesheet" href="../assets/css/admin_dashboardStyle.css">
    <style>
        /* Button Styling */
        .delete-btn {
            background-color: #ff4d4d;
            color: white;
            padding: 12px 25px;
            font-size: 1.2rem;
            border: none;
            border-radius: 30px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .delete-btn:hover {
            background-color: #ff1a1a;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(255, 0, 0, 0.3);
        }

        /* Add media queries for responsiveness */
        @media (max-width: 768px) {
            .delete-btn {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .delete-btn {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
        }

        /* Form container styles */
        .form-container {
            width: 80%;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Basic styling for the form elements */
        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
         <!-- Logout Button with Inline CSS -->
         <form action="logout.php" method="POST">
            <button type="submit" style="background-color: #ff4d4d; color: white; border: none; padding: 10px 20px; font-size: 1rem; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                Logout
            </button>
        </form>
        <h1>Add Project</h1>
        <form action="add_project.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Project Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Project Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Project Link (optional)</label>
                <input type="url" class="form-control" id="link" name="link">
            </div>
            <button type="submit" class="btn">Add Project</button>
            <a href="delete_project.php" class="delete-btn">Delete Projects</a>
        </form>
    </div>
</body>
</html>
