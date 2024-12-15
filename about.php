<?php include 'includes/header.php'; ?>

<div class="about-section py-5" style="background-color: #f2E8D3; position: relative;">
    <div class="container">
        <h1 class="text-center mb-4" style="font-family: 'Arial', sans-serif; color: #333; font-weight: bold;">About Me</h1>
        <div class="row align-items-center">
            <!-- Circular Image Section with Hover Effect -->
            <div class="col-md-6 text-center mb-4 mb-md-0" style="position: relative; width: 300px; height: 300px; margin: auto;">
                <img src="assets/images/about.png" alt="About Me" class="img-fluid shadow-lg" 
                     style="
                         width: 100%; 
                         height: 100%; 
                         object-fit: cover; 
                         border-radius: 50%; 
                         border: 5px solid #007bff;">
                <!-- Hover Content -->
                <div style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-radius: 50%; /* Ensure circular shape */
                    background-color: rgba(0, 0, 0, 0.6);
                    color: #fff;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-family: 'Arial', sans-serif;
                    font-size: 1rem;
                    text-align: center;
                    opacity: 0;
                    transition: opacity 0.3s ease-in-out;">
                    <div>
                        <h5 style="margin: 0; font-weight: bold;">Final Year Diploma Student</h5>
                        <p style="margin: 0;">Government Polytechnic Mau College</p>
                    </div>
                </div>
            </div>
            <!-- Text Section -->
            <div class="col-md-6">
                <p style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                    Hi, I'm <span style="font-weight: bold; color: #007bff;">Pawan</span>, a final-year diploma 
                    Computer Science student passionate about technology and web development.
                    With expertise in <span style="font-weight: bold;">HTML</span>, <span style="font-weight: bold;">CSS</span>, <span style="font-weight: bold;">Bootstrap</span>, <span style="font-weight: bold;">PHP</span>, 
                    <span style="font-weight: bold;">JavaScript</span>, and <span style="font-weight: bold;">Python</span>, 
                    I create functional, modern, and responsive web applications.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                    My projects include a variety of tools such as <span style="font-weight: bold;"><a href="https://studyfeel.free.nf">educational website</a></span>, 
                    <span style="font-weight: bold;"><a href="https://techtitansadv.rf.gd">techtitan team</a></span>,
                    <span style="font-weight: bold;"><a href="https://blogstore.rf.gd">Blog website</a></span>,  
                    <span style="font-weight: bold;"><a href="https://codingworld.rf.gd">Coding World website</a></span>, and more.
                    I aim to combine technology with user-friendly design to create impactful solutions.
                </p>
                <!-- Button Section -->
                <div class="mt-3">
                    <a href="projects.php" class="btn btn-primary px-4 py-2" 
                       style="font-size: 1rem; border-radius: 25px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        View My Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.col-md-6.text-center').forEach(section => {
        const hoverContent = section.querySelector('div[style*="position: absolute"]');
        section.addEventListener('mouseover', () => hoverContent.style.opacity = '1');
        section.addEventListener('mouseout', () => hoverContent.style.opacity = '0');
    });
</script>

<?php include 'includes/footer.php'; ?>
