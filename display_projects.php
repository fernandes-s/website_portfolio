<?php include 'includes/header.php'; ?>

<?php
// SQL query to get all projects from the database
$sql = "SELECT id, title, description, technologies, url, date_completed, image_path FROM projects";
$result = $conn->query($sql);
?>

<div class="container my-5 text-center">
    <h1 class="display-4 text-white mb-4">My Projects</h1>
    <p class="text-muted mb-4">Here are some of the projects I’ve worked on. Hover to see details!</p>

    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                // Check if image_path exists, otherwise use a default image
                $image_path = !empty($row['image_path']) ? htmlspecialchars($row['image_path']) : 'images/default_project.webp';

                echo "<div class='col-lg-6 col-md-6 col-sm-12 mb-4'>";
                echo "<div class='project-card position-relative rounded shadow-lg'>";

                // Add image with clickable redirect to GitHub
                echo "<a href='" . htmlspecialchars($row['url']) . "' target='_blank'>";
                echo "<img src='$image_path' alt='Project Image' class='img-fluid rounded project-image' style='width: 100%; height: 250px; object-fit: cover;'>";
                echo "</a>";

                // Add hover effect with description
                echo "<div class='project-hover position-absolute w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center' style='background-color: rgba(0, 0, 0, 0.7); top: 0; left: 0; opacity: 0; transition: opacity 0.3s;'>";
                // hyperlink tag in the title
                echo "<a href='" . htmlspecialchars($row['url']) . "' target='_blank' class='text-danger'>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "</a>";

                echo "<p class='text-white px-3'>" . htmlspecialchars($row['description']) . "</p>";
                echo "<p class='text-white px-3'><strong>Technologies:</strong> " . htmlspecialchars($row['technologies']) . "</p>";
                // echo "<p class='text-muted'><strong>Date Completed:</strong> " . htmlspecialchars($row['date_completed']) . "</p>";
                echo "</div>";

                // Script for hover effect
                echo "<script>
                        document.querySelectorAll('.project-card').forEach(card => {
                            card.addEventListener('mouseenter', function() {
                                this.querySelector('.project-hover').style.opacity = '1';
                            });
                            card.addEventListener('mouseleave', function() {
                                this.querySelector('.project-hover').style.opacity = '0';
                            });
                        });
                      </script>";

                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-white'>No projects found</p>";
        }
        ?>
    </div>
</div>

<!-- Custom Styles -->
<style>
    body {
        background-color: #1a1a1a; /* Black background */
    }

    .text-white {
        color: #f0f0f0; /* White text */
    }

    .text-muted {
    color: #d3d3d3 !important; /* Bright red text */
}


    .text-danger {
        color: #ff4d4d; /* Red text for emphasis */
    }

    .project-card {
        background-color: #2c2c2c; /* Dark grey */
        overflow: hidden; /* Ensures hover content doesn't spill out */
        position: relative;
    }

    .project-image {
        transition: transform 0.3s ease-in-out;
    }

    .project-card:hover .project-image {
        transform: scale(1.1); /* Slight zoom effect on hover */
    }

    .project-hover {
        transition: opacity 0.3s ease-in-out;
        opacity: 0;
    }

    .project-card:hover .project-hover {
        opacity: 1;
    }

    .project-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .project-card p {
        margin-bottom: 0.5rem;
    }

    .project-card a {
        text-decoration: none;
    }
</style>

<?php include 'includes/footer.php'; ?>
