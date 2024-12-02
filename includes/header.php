<?php include 'config/connect.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Daniel Fernandes</title>
    <!-- fav icon -->
    <link rel="shortcut icon" href="images/letter-d.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="script.js" defer></script>


    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #1a1a1a; /* Dark background */
            padding: 10px 15px;
        }
        .navbar-brand {
            color: #f0f0f0 !important; /* Light color for branding */
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-brand:hover {
            color: #ff4d4d !important; /* Red hover effect */
        }

        /* Nav Links Styling */
        .nav-link {
            color: #f0f0f0 !important;
            font-size: 1rem;
            margin: 0 15px;
            position: relative;
        }
        .nav-link:hover {
            color: #ff4d4d !important; /* Red hover effect */
        }

        /* Underline Effect on Hover */
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -5px; /* Adjust underline position */
            height: 2px;
            background-color: #ff4d4d;
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }
        .nav-link:hover::after {
            transform: scaleX(1); /* Underline expands on hover */
        }

        /* Navbar Icons */
        .nav-icon {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Branding -->
            <a class="navbar-brand" href="https://www.linkedin.com/in/fernandesss-s/">Daniel Fernandes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><i class="fas fa-home nav-icon"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fas fa-user nav-icon"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submit_testimonial.php"><i class="fas fa-comment nav-icon"></i>Submit Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="show_testimonials.php"><i class="fas fa-comments nav-icon"></i>Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_projects.php"><i class="fas fa-folder-open nav-icon"></i>Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education.php"><i class="fas fa-graduation-cap nav-icon"></i>Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="fas fa-envelope nav-icon"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>