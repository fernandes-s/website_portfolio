<?php include 'includes/header.php'; ?> <!-- The database connection is included via the header -->

<div class="container my-5 text-center">
    <h1 class="display-4 text-center text-white mb-4">Customer Testimonials</h1>
    <p class="text-center text-muted">Hear what our customers have to say!</p>

    <div class="container text-white p-4 rounded">
        <?php
        // SQL query to get all testimonials from the database
        $sql = "SELECT name, testimonial, image_path, date_submitted FROM testimonials ORDER BY date_submitted DESC";
        $result = $conn->query($sql);  // Use $conn here to match your database connection variable

        if ($result->num_rows > 0) {
            // Loop through each testimonial and display it
            while ($row = $result->fetch_assoc()) {
                // Check if the user uploaded an image, otherwise use the bot image for all entries without an uploaded image
                $image_path = (!empty($row["image_path"]) && file_exists($row["image_path"])) ? $row["image_path"] : 'uploads/bot.png';  // Use default bot image if none uploaded

                echo "<div class='row mb-4 p-3 border rounded' style='background-color: #333;'>";
                echo "<div class='col-md-2 d-flex align-items-center justify-content-center'>"; // Center image vertically and horizontally
                echo "<img src='" . htmlspecialchars($image_path) . "' alt='User Image' class='img-fluid rounded-circle' style='width: 120px; height: 120px;'>"; // Larger profile image
                echo "</div>";
                echo "<div class='col-md-10 text-start'>"; // Align all text to the left
                echo "<h5 class='text-danger'>" . htmlspecialchars($row["name"]) . "</h5>"; // Name in red
                echo "<p class='mb-2 fs-5'>" . htmlspecialchars($row["testimonial"]) . "</p>"; // Larger font size for testimonial content
                echo "<small class='text-muted' style='color: #ffffff;'>Submitted on: " . htmlspecialchars($row["date_submitted"]) . "</small>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-white text-start'>No testimonials found</p>"; // Align the no-testimonial message to the left
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</div>

<!-- Custom Styling -->
<style>
    body {
        background-color: #1a1a1a; /* Entire background in a single color */
    }

    .container h1 {
        color: #f0f0f0;
        font-size: 2.5rem;
        text-align: left; /* Align the title to the left */
    }

    .text-white {
        color: #f0f0f0;
    }

    .row {
        margin-bottom: 15px;
        padding: 15px;
        background-color: #333; /* Box background in a different color */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow for the box */
        text-align: left; /* Align all text inside the row to the left */
    }

    .text-danger {
        color: #ff4d4d; /* Bright red for the name */
        font-weight: bold;
        margin-bottom: 5px;
    }

    .text-muted {
        color: #b0b0b0 !important; /* Light grey color with higher specificity */
    }


    .fs-5 {
        font-size: 1.25rem; /* Slightly larger font size for the testimonial text */
        line-height: 1.6; /* Better line spacing */
    }

    .img-fluid {
        border: 2px solid #d3d3d3; /* Add a border to the profile image */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Subtle shadow for the image */
        width: 120px; /* Increased width */
        height: 120px; /* Increased height */
    }

    .col-md-2 {
        display: flex;
        align-items: center; /* Center image vertically */
        justify-content: center; /* Center image horizontally */
        padding: 0; /* Remove excess padding around the image container */
    }
</style>

<?php include 'includes/footer.php'; ?>
