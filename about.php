<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <!-- Title -->
    <h1 class="text-center text-white mb-5">About Me</h1>

    <!-- Profile Section -->
    <div class="row align-items-center">
        <!-- Profile Image -->
        <div class="col-lg-4 col-md-5 col-sm-12 d-flex justify-content-center">
            <div class="profile-image-container">
                <img src="images/Profile Picture.png" class="img-fluid profile-image" alt="Daniel Fernandes">
            </div>
        </div>

        <!-- About Text -->
        <div class="col-lg-8 col-md-7 col-sm-12">
            <p class="text-muted text-start">
                My journey has been about discovery and growth, much like a data set waiting to be explored. From my roots in Rio de Janeiro to my current path in Dublin, I’m constantly evolving, analyzing, and building solutions that bridge ideas and technology. Starting with a foundation in computing, I’ve honed my analytical mind and tech skills, driven by a curiosity to see beyond the numbers and bring insights to life. My projects reflect my passion for data and my goal to make an impact in finance and consulting—fields where data can change everything.
            </p>
        </div>
    </div>
</div>

<!-- Custom CSS Styling -->
<style>
    body {
        background-color: #1a1a1a;
        min-height: 100vh; /* Ensure the page height spans the full viewport */
        display: flex;
        flex-direction: column;
    }

    .container {
        max-width: 1200px;
        margin-bottom: auto; /* Push footer to the bottom */
    }

    /* Title Styling */
    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #ff4d4d; /* Highlighted red */
    }

    .text-muted {
        color: #d3d3d3 !important; /* Subtle grey for form description */
    }

    /* Profile Image Styling */
    .profile-image-container {
        width: 350px;
        height: 350px;
        border-radius: 50%;
        background: radial-gradient(circle, #ff4d4d, #1a1a1a 70%); /* Gradient fade */
        padding: 10px;
        display: inline-block;
        box-shadow: 0 0 20px rgba(255, 77, 77, 0.5), 0 0 30px rgba(0, 0, 0, 0.4);
        animation: fade-in 1.5s ease-in-out; /* Fade-in animation */
    }

    .profile-image {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    /* Text Styling */
    p {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #d3d3d3 !important;
    }

    /* Animation for Fade-in Effect */
    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Footer at the Bottom */
    footer {
        margin-top: auto; /* Footer stays at the bottom */
        background-color: #1a1a1a;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .profile-image-container {
            width: 150px;
            height: 150px;
        }

        h1 {
            font-size: 2rem;
        }

        p {
            font-size: 1rem;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>
