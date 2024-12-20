<?php include 'includes/header.php'; ?> <!-- Include the header -->

<div class="container my-5 d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
    <h1 class="text-white mb-4" style="font-size: 3rem; font-weight: bold;">Thank You!</h1>
    <p class="text-muted text-center" style="font-size: 1.2rem;">
        Your testimonial has been submitted successfully. We truly appreciate your feedback.
    </p>
    <div class="mt-4">
        <a href="index.php" class="btn btn-danger" style="font-size: 1rem; padding: 10px 20px;">Go Back to Home</a>
        <a href="show_testimonials.php" class="btn btn-secondary me-3" style="font-size: 1rem; padding: 10px 20px;">View Testimonials</a>
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

    .btn-secondary {
        background-color: #737373;
        border: none;
        padding: 10px 20px;
        font-size: 1.2rem;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #5a5a5a; /* Darker grey hover */
        transform: scale(1.05); /* Slight zoom effect */
    }

    .btn-danger {
        background-color: #ff4d4d;
        border: none;
        padding: 10px 20px;
        font-size: 1.2rem;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .btn-danger:hover {
        background-color: #e63c3c; /* Darker red hover */
        transform: scale(1.05); /* Slight zoom effect */
    }
</style>

<?php include 'includes/footer.php'; ?> <!-- Include the footer -->
