<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <h1 class="display-4 text-center text-white mb-4">Drop Me a Message!</h1>
    <p class="text-center text-muted">I'd love to hear from you. Fill out the form below, and I'll get back to you as soon as possible!</p>

    <form method="post" action="contact_submit.php" class="p-4 rounded shadow-lg" style="background-color: #2c2c2c;">
        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label text-white">Name</label>
            <input type="text" name="name" id="name" class="form-control bg-secondary text-white" placeholder="Enter your name" required>
        </div>

        <!-- Email Field -->
        <div class="mb-3">
            <label for="email" class="form-label text-white">Email</label>
            <input type="email" name="email" id="email" class="form-control bg-secondary text-white" placeholder="Enter your email" required>
        </div>

        <!-- Phone Field -->
        <div class="mb-3">
            <label for="phone" class="form-label text-white">Phone</label>
            <input type="tel" name="phone" id="phone" class="form-control bg-secondary text-white" placeholder="Enter your phone number" required>
        </div>

        <!-- Message Field -->
        <div class="mb-3 position-relative">
            <label for="message" class="form-label text-white">Message</label>
            <textarea name="message" id="message" class="form-control bg-secondary text-white" rows="4" maxlength="500" oninput="updateCounter()" placeholder="Write your message here" required></textarea>
            <small id="charCounter" class="position-absolute text-white" style="bottom: 10px; right: 10px; font-size: 0.9rem;">500 characters remaining</small>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-danger w-100">Send Message</button>
    </form>
</div>

<!-- JavaScript for Character Counter -->
<script>
    function updateCounter() {
        const maxLength = 500;
        const currentLength = document.getElementById('message').value.length;
        document.getElementById('charCounter').innerText = `${maxLength - currentLength} characters remaining`;
    }
</script>

<!-- Custom Styles -->
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
</style>

<?php include 'includes/footer.php'; ?>
