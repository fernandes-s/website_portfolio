<?php include 'includes/header.php'; ?>

<div class="container my-5 d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
    <h1 class="text-white mb-4" style="font-size: 3rem; font-weight: bold;">Thank You!</h1>
    <p class="text-muted text-center" style="font-size: 1.2rem;">
        Your message has been sent successfully. I will get back to you as soon as possible.
    </p>
    <div class="mt-4">
        <a href="index.php" class="btn btn-danger me-3" style="font-size: 1rem; padding: 10px 20px;">Go Back to Home</a>
        <a href="contact.php" class="btn btn-secondary" style="font-size: 1rem; padding: 10px 20px;">Send Another Message</a>
    </div>
</div>

<!-- Custom Styles -->
<style>
    body {
        background-color: #1a1a1a; /* Maintain consistent background */
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Ensure page height spans viewport */
    }

    .container {
        flex: 1; /* Push footer to the bottom */
        text-align: center;
    }

    h1 {
        color: #ff4d4d; /* Red for emphasis */
    }

    p {
        color: #d3d3d3; /* Subtle grey for text */
    }

    .text-muted {
        color: #d3d3d3 !important; /* Subtle grey for form description */
    }

    .btn-danger {
        background-color: #ff4d4d;
        border: none;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .btn-danger:hover {
        background-color: #e63c3c; /* Darker red hover */
        transform: scale(1.05); /* Slight zoom effect */
    }

    .btn-secondary {
        background-color: #444;
        border: none;
        color: #f0f0f0;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #666;
        transform: scale(1.05); /* Slight zoom effect */
    }
</style>

<?php include 'includes/footer.php'; ?>
