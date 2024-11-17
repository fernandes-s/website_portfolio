<?php include 'includes/header.php'; ?> <!-- Include the header with navigation -->

<div class="container d-flex flex-column align-items-center text-center my-5">
    <div class="profile-image-container mb-4">
        <img src="images/Profile Picture.png" class="img-fluid profile-image" alt="Daniel Fernandes">
    </div>

    <div class="about-text-section">
        <h1 class="display-4">About Me</h1>
        <p class="lead mt-4">
            My journey has been about discovery and growth, much like a data set waiting to be explored. From my roots in Rio de Janeiro to my current path in Dublin, I’m constantly evolving, analyzing, and building solutions that bridge ideas and technology. Starting with a foundation in computing, I’ve honed my analytical mind and tech skills, driven by a curiosity to see beyond the numbers and bring insights to life. My projects reflect my passion for data and my goal to make an impact in finance and consulting—fields where data can change everything.
        </p>
    </div>
</div>

<!-- Custom CSS Styling -->
<style>
    /* Centered layout and styling */
    .container {
        max-width: 800px; /* Limit width for better readability */
    }

    /* Profile image glow effect */
    .profile-image-container {
        padding: 20px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(211, 211, 211, 0.5), transparent 70%);
        box-shadow: 0 0 20px rgba(211, 211, 211, 0.4), 0 0 40px rgba(211, 211, 211, 0.2);
    }

    .profile-image {
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(211, 211, 211, 0.6); /* Inner glow */
    }

    /* Text styling */
    .about-text-section h1 {
        font-size: 3rem;
        font-weight: bold;
        color: #f0f0f0;
    }

    .about-text-section p {
        font-size: 1.25rem;
        color: #d3d3d3;
        line-height: 1.6;
    }

    /* Background color */
    body {
        background-color: #1a1a1a;
    }
</style>

<?php include 'includes/footer.php'; ?>
