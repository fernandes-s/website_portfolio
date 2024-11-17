<?php include 'includes/header.php'; ?>

<div class="container my-5 text-center">
    <<h1 class="display-4 text-center text-white mb-4">Submit Your Testimonial</h1>
    <p class="text-center text-muted">We’d love to hear from you! Please share your experience with us.</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $testimonial = htmlspecialchars($_POST['testimonial']);
        $image_path = 'uploads/default.jpg';

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($imageFileType, $allowed_types)) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image_path = $target_file;
                }
            }
        }

        $sql = "INSERT INTO testimonials (name, testimonial, image_path) VALUES ('$name', '$testimonial', '$image_path')";
        if ($conn->query($sql) === TRUE) {
            header('Location: thank_you.php');
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    }
    ?>
</div>

<div class="container text-white">
    <form action="submit_testimonial.php" method="POST" enctype="multipart/form-data" class="bg-dark p-4 rounded shadow-lg">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name:</label>
            <input type="text" class="form-control bg-secondary text-white" id="name" name="name" required>
        </div>
        <div class="mb-3 position-relative">
            <label for="testimonial" class="form-label">Your Testimonial:</label>
            <textarea class="form-control bg-secondary text-white" id="testimonial" name="testimonial" rows="4" maxlength="250" oninput="updateCounter()" required></textarea>
            <small id="charCounter" class="position-absolute text-white" style="bottom: 10px; right: 10px; font-size: 0.9rem;">250 characters remaining</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload a Picture (Optional):</label>
            <input type="file" class="form-control bg-secondary text-white" id="image" name="image" accept="image/*" onchange="previewImage(event)">
            <img id="imagePreview" style="max-width: 100%; margin-top: 10px; display: none;" alt="Image Preview" />
        </div>
        <button type="submit" class="btn btn-danger w-100">Submit</button>
    </form>
</div>

<script>
    function updateCounter() {
        const maxLength = 250;
        const currentLength = document.getElementById('testimonial').value.length;
        document.getElementById('charCounter').innerText = `${maxLength - currentLength} characters remaining`;
    }

    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<style>
    body {
        background-color: #1a1a1a; /* Black background */
    }

    .text-white {
        color: #f0f0f0 !important; /* Light text for form labels */
    }

    .text-muted {
        color: #d3d3d3 !important; /* Subtle grey for form description */
    }

    .btn-danger {
        background-color: #ff4d4d; /* Red button */
        border: none;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-danger:hover {
        background-color: #e63c3c; /* Darker red on hover */
    }

    .form-control.bg-secondary {
        background-color: #2c2c2c; /* Dark grey background for fields */
        color: #f0f0f0; /* White text */
        border: 1px solid #444; /* Subtle border */
    }

    .form-control:focus {
        background-color: #444; /* Slightly darker background on focus */
        color: #fff;
        border-color: #ff4d4d; /* Red border on focus */
        box-shadow: none;
    }

    #charCounter {
        position: absolute;
        bottom: 10px;
        right: 10px;
        color: #a9a9a9; /* Light grey for character counter */
    }

    /* Image Preview Styling */
    #imagePreview {
        max-width: 200px; /* Adjust as needed */
        max-height: 200px; /* Adjust as needed */
        width: auto;
        height: auto;
        border: 2px solid #d3d3d3;
        border-radius: 10px;
        margin-top: 10px;
    }
</style>

<?php include 'includes/footer.php'; ?>
