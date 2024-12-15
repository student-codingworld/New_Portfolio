<?php 
include 'includes/header.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db_config.php';

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);
    if ($stmt->execute()) {
        $success = "Message sent successfully!";
    } else {
        $error = "Something went wrong. Please try again.";
    }
}
?>

<div class="contact-section py-5">
    <div class="container">
        <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #6c63ff;">
            Get in Touch
        </h1>
        <div class="row mt-4">
            <!-- Left Side (Image Section) -->
            <div class="col-md-6 text-center">
                <div style="
                    position: relative;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    max-width: 300px; 
                    margin: auto;
                    animation: float 3s ease-in-out infinite;">
                    <!-- Animated Border -->
                    <div style="
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        border: 5px solid transparent;
                        border-radius: 50%;
                        background: linear-gradient(45deg, #ff6ec4, #7873f5);
                        background-clip: padding-box;
                        animation: rotateBorder 5s linear infinite;">
                    </div>
                    <img src="assets/images/pawan_image.bmp" alt="Contact"
                         style="
                            width: 100%;
                            height: auto;
                            max-width: 100%;
                            border-radius: 50%;
                            z-index: 1;
                            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);">
                </div>
            </div>

            <!-- Right Side (Form Section) -->
            <div class="col-md-6">
                <?php if (isset($success)) echo "<p class='text-success'>$success</p>"; ?>
                <?php if (isset($error)) echo "<p class='text-danger'>$error</p>"; ?>

                <form method="POST" action="" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <!-- Name Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label" style="font-weight: bold;">Name</label>
                        <input type="text" class="form-control" id="name" name="name" 
                               placeholder="Enter your full name" 
                               style="border: 1px solid #ddd; border-radius: 4px; transition: all 0.3s;"
                               required>
                    </div>
                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-weight: bold;">Email</label>
                        <input type="email" class="form-control" id="email" name="email" 
                               placeholder="Enter your email address" 
                               style="border: 1px solid #ddd; border-radius: 4px; transition: all 0.3s;"
                               required>
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!-- Message Input -->
                    <div class="mb-3">
                        <label for="message" class="form-label" style="font-weight: bold;">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" 
                                  placeholder="Write your message here" 
                                  style="border: 1px solid #ddd; border-radius: 4px; transition: all 0.3s;" 
                                  required></textarea>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100" 
                            style="background: linear-gradient(45deg, #6c63ff, #ff6ec4); border: none; font-weight: bold;">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
/* Animations */
@keyframes float {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}

@keyframes rotateBorder {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

/* Form Input Hover and Focus */
input:focus, textarea:focus {
    outline: none;
    border-color: #6c63ff;
    box-shadow: 0px 0px 5px rgba(108, 99, 255, 0.5);
}

button:hover {
    background: linear-gradient(45deg, #ff6ec4, #6c63ff);
    transform: scale(1.05);
}
</style>

<?php include 'includes/footer.php'; ?>
