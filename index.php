<?php  
include 'includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawan Patel Portfolio | Web Development & Python Programming Expert</title>
    
    <!-- Meta Tags for SEO -->
    <meta name="description" content="Explore Pawan Patel's portfolio. Final-year computer science student specializing in web development, Python programming, and more.">
    <meta name="keywords" content="Pawan Patel, Portfolio, Web Development, Python Programming, Computer Science, Projects">
    <meta name="author" content="Pawan Patel">

    <!-- Open Graph Meta Tags for Social Media Sharing -->
    <meta property="og:title" content="Pawan Patel Portfolio | Web Development & Python Programming Expert">
    <meta property="og:description" content="Explore Pawan Patel's portfolio, showcasing expertise in web development and Python programming.">
    <meta property="og:image" content="assets/images/portfolio_preview.png"> <!-- Add a preview image -->
    <meta property="og:url" content="https://yourwebsite.com">

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Pawan Patel",
        "jobTitle": "Web Developer and Python Programmer",
        "url": "https://yourwebsite.com",
        "image": "https://yourwebsite.com/assets/images/profile.jpg",
        "sameAs": [
            "https://linkedin.com/in/pawanpatel",
            "https://github.com/pawanpatel"
        ]
    }
    </script>
    
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Link to your CSS file -->
    <style>
           /* Hero Section */
    .hero {
        position: relative;
        height: 100vh;
        background: radial-gradient(circle at bottom, #000, #010518, #020926);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;  /* Center the content */
        text-align: center;
        color: #fff;
        padding: 20px;
    }
     /* Button Styling */
     .hero .btn {
        display: inline-block;
        padding: 12px 30px;
        margin: 10px;
        font-size: 1.2rem;
        text-decoration: none;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .hero .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
    }

    .hero .btn-primary:hover {
        background-color: #0056b3;
    }

    .hero .btn-success {
        background-color: #28a745;
        color: white;
        border: none;
    }

    .hero .btn-success:hover {
        background-color: #218838;
    }

    /* Button responsiveness */
    @media (max-width: 768px) {
        .hero .btn {
            font-size: 1rem;
            padding: 10px 20px;
            margin: 8px;
        }
    }


/* Ashok Chakra with 24 Spokes */
.ashok-chakra {
        position: absolute;  /* Use absolute positioning to center it */
        width: 200px; /* Reduced size */
        height: 200px; /* Reduced size */
        border: 5px solid #0af;
        border-radius: 50%;
        animation: rotateChakra 10s linear infinite;  /* Smooth rotation animation */
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(circle, transparent 60%, #0af 60%, #0af 63%, transparent 63%);
        box-shadow: 0 0 20px #0af, inset 0 0 10px #0af;
        top: 50%;  /* Center vertically */
        left: 50%; /* Center horizontally */
        transform: translate(-50%, -50%); /* Offset by 50% to truly center */
        opacity: 0.5;  /* Reduced visibility */
    }

/* Keyframe for smooth continuous rotation */
@keyframes rotateChakra {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
    }
    100% {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}

/* Spokes */
.ashok-chakra .spoke {
    position: absolute;
    width: 2px;
    height: 50%;
    background-color: #0af;
    top: 0;
    left: 50%;
    transform-origin: bottom center;
}
/* About Section */
#about h2, #about p {
    color: #000;  /* Change text color to black */
}

/* Projects Section */
#projects h2, #projects .card-title, #projects .card-text {
    color: #000;  /* Change text color to black */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .ashok-chakra {
        width: 150px;
        height: 150px;
    }

    .ashok-chakra span {
        font-size: 1.2rem;
        padding: 8px 15px;
    }
}

/* Spokes */
.ashok-chakra::before {
    content: "";
    position: absolute;
    width: 95%;
    height: 95%;
    border: 2px solid transparent;
    border-radius: 50%;
    box-shadow: 0 0 10px #0af;
}

.ashok-chakra .spoke {
    position: absolute;
    width: 2px;
    height: 50%;
    background-color: #0af;
    top: 0;
    left: 50%;
    transform-origin: bottom center;
}

/* Rotating Spokes */
.ashok-chakra .spoke:nth-child(1) { transform: rotate(0deg); }
.ashok-chakra .spoke:nth-child(2) { transform: rotate(15deg); }
.ashok-chakra .spoke:nth-child(3) { transform: rotate(30deg); }
.ashok-chakra .spoke:nth-child(4) { transform: rotate(45deg); }
.ashok-chakra .spoke:nth-child(5) { transform: rotate(60deg); }
.ashok-chakra .spoke:nth-child(6) { transform: rotate(75deg); }
.ashok-chakra .spoke:nth-child(7) { transform: rotate(90deg); }
.ashok-chakra .spoke:nth-child(8) { transform: rotate(105deg); }
.ashok-chakra .spoke:nth-child(9) { transform: rotate(120deg); }
.ashok-chakra .spoke:nth-child(10) { transform: rotate(135deg); }
.ashok-chakra .spoke:nth-child(11) { transform: rotate(150deg); }
.ashok-chakra .spoke:nth-child(12) { transform: rotate(165deg); }
.ashok-chakra .spoke:nth-child(13) { transform: rotate(180deg); }
.ashok-chakra .spoke:nth-child(14) { transform: rotate(195deg); }
.ashok-chakra .spoke:nth-child(15) { transform: rotate(210deg); }
.ashok-chakra .spoke:nth-child(16) { transform: rotate(225deg); }
.ashok-chakra .spoke:nth-child(17) { transform: rotate(240deg); }
.ashok-chakra .spoke:nth-child(18) { transform: rotate(255deg); }
.ashok-chakra .spoke:nth-child(19) { transform: rotate(270deg); }
.ashok-chakra .spoke:nth-child(20) { transform: rotate(285deg); }
.ashok-chakra .spoke:nth-child(21) { transform: rotate(300deg); }
.ashok-chakra .spoke:nth-child(22) { transform: rotate(315deg); }
.ashok-chakra .spoke:nth-child(23) { transform: rotate(330deg); }
.ashok-chakra .spoke:nth-child(24) { transform: rotate(345deg); }

.ashok-chakra span {
    font-size: 2rem; /* Increased text size */
    font-weight: bold;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 12px 25px;
    border-radius: 5px;
    text-shadow: 0 0 10px #0af;
    z-index: 1;
}

/* Text Container Styling */
.container h1, .container p {
    font-size: 1.5rem;  /* Increased font size for better visibility */
    font-weight: bold;
    text-shadow: 0 0 15px #fff;
    color: #fff;
    z-index: 2;
}
/* Adjust Hero Section for Small Devices */
@media (max-width: 480px) {
        .hero .btn {
            font-size: 0.9rem;
            padding: 8px 18px;
            margin: 6px;
        }
    }
/* Responsive Adjustments */
@media (max-width: 768px) {
    .ashok-chakra {
        width: 150px;
        height: 150px;
        margin-top: 20px;
    }

    .ashok-chakra span {
        font-size: 1.2rem;
        padding: 8px 15px;
    }

    .container h1, .container p {
        font-size: 1.2rem;
    }
}
    </style>
    </style>
</head>
<body>

    <!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Hi, I'm Pawan Patel</h1>
        <p>A Final-Year Diploma Computer Science Student with Expertise in Web Development</p>
        <a href="viewMyWork/viewMyWork.php" class="btn btn-primary">View My Work</a>
        <a href="assets/resume/Pawan_Patel_resume.pdf" class="btn btn-success" download>Download My Resume</a>
    </div>
    <div class="ashok-chakra">
        <span>CSE</span>
        <!-- Spokes -->
        <?php for ($i = 0; $i < 24; $i++) echo '<div class="spoke"></div>'; ?>
    </div>
</div>


    <!-- About Section -->
    <section id="about" class="about py-5">
        <div class="container">
            <h2>About Me</h2>
            <p>I am Pawan Patel, a Computer Science student passionate about technology. With expertise in web and Python development, I create elegant, functional web applications.</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects py-5">
        <div class="container">
            <h2>Projects</h2>
            <div class="row">
                <?php
                // Include database configuration
                include 'db_config.php';

                // Fetch project details from the database
                $sql = "SELECT * FROM projects LIMIT 6"; // Display only 6 projects initially
                $result = $conn->query($sql);

                // Display each project in a card layout
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
                ?>
            </div>
            <div class="text-center mt-4">
                <a href="https://kids.rf.gd/teamwebsite_record/index.html?i=1" class="btn btn-secondary">View All Projects</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>