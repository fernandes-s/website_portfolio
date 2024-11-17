<?php include 'includes/header.php'; ?> <!-- Include the header with navigation -->

<!-- Hero Section -->
<div class="hero-section text-center d-flex align-items-center justify-content-center" style="height: 100vh; background-image: url('images/background.webp'); background-size: cover; background-position: center; position: relative;">
    <!-- Light Shade of Black Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6);"></div>

    <!-- Content -->
    <div class="text-white" style="position: relative; z-index: 1;">
        <h1 class="display-3">Daniel Fernandes</h1>
        <p class="lead mb-4">Data Science Enthusiast | BSc Computing Student | Data Analytics & Big Data</p>
        
        <!-- Typing Effect Section -->
        <p class="lead">
            <span id="typed-text"></span>
        </p>
        
        <!-- Social Media Links -->
        <div class="social-icons my-4">
            <a href="https://linkedin.com/in/fernandesss-s/" target="_blank" class="btn btn-outline-light btn-lg mx-2" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/fernandes-s" target="_blank" class="btn btn-outline-light btn-lg mx-2" title="GitHub"><i class="fab fa-github"></i></a>
        </div>
    </div>
</div>

<style>
.hero-section {
    position: relative;
    text-align: center;
    height: 100vh;
    overflow: hidden; /* Prevents unwanted scrolling or layout shifts */
}

.text-white {
    position: relative;
    z-index: 1;
}

.social-icons {
    margin-top: 20px; /* Ensure spacing is consistent */
    display: flex;
    justify-content: center; /* Center the icons */
    gap: 10px; /* Space between the icons */
}
</style>

<!-- Rest of your HTML structure -->

<?php include 'includes/footer.php'; ?> 
