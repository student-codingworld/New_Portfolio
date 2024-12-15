<?php
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View My Work| Pawan Patel | Founder and CEO of Coding World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.8rem;
            color: #4e73df;
            margin-bottom: 20px;
        }

        .btn-work {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1.2rem;
            transition: 0.3s ease;
        }

        .btn-work:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .work-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .work-item {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 8px;
            width: 200px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease;
        }

        .work-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .work-item h3 {
            text-align: center;
            color: #007bff;
        }

        .work-item p {
            text-align: center;
            color: #333;
        }

        .work-item a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            text-align: center;
            display: block;
            margin-top: 10px;
        }

        .work-item a:hover {
            text-decoration: underline;
        }

        .certifications, .websites {
            margin-top: 40px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .work-item {
                width: 45%;
            }
        }

        @media (max-width: 576px) {
            .work-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to My Work</h1>
        <p class="text-center">Here, I share some of my projects, internship experiences, certifications, and my hosted websites.</p>
        
        <div class="text-center">
            <a href="#myWork" class="btn btn-work">View My Work</a>
        </div>

        <!-- My Work Section -->
        <section id="myWork">
            <h2>What I Have Done</h2>
            <div class="work-list">
                <!-- Internship -->
                <div class="work-item">
                    <h3>Internship at CODSOFT</h3>
                    <p>Completed a one-month internship in PYTHON at CODSOFT Company, Bengaluru. Worked on web development projects and learned advanced technologies.</p>
                    <a href="https://drive.google.com/file/d/1irUkoascGhTAoOisLkNb9ytg0UZrQJ95/view" target="_blank">Certification</a>
                </div>

                <!-- Workshop -->
                <div class="work-item">
                    <h3>Workshops</h3>
                    <p>Participated in workshops on DBMS and C programming, gaining hands-on experience and practical knowledge.</p>
                </div>

                <!-- Certifications -->
                <div class="work-item">
                    <h3>Python Certifications</h3>
                    <p>Completed various certifications in Python, expanding my skills in data analysis, web development, and automation.</p>
                </div>
            </div>
        </section>

        <!-- List of Websites -->
        <section id="websites" class="websites">
            <h2>My Hosted Websites</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="https://studyfeel.free.nf" target="_blank">studyfeel.rf.gd</a></li>
                <li class="list-group-item"><a href="https://codingword.rf.gd" target="_blank">codingword.rf.gd</a></li>
                <li class="list-group-item"><a href="https://kids.rf.gd" target="_blank">kids.rf.gd</a></li>
                <li class="list-group-item"><a href="../projects.php">for more go to projects</a></li>
            </ul>
        </section>
        
    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>
