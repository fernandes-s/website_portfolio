<?php include 'includes/header.php'; ?> <!-- Include the header -->

<div class="container my-5">
    <!-- Title -->
    <h1 class="display-4 text-center text-white mb-4">Education</h1>

     <!-- Education Section -->
     <div class="row mb-5 text-center"> <!-- Centralized the education details -->
        <div class="col-12">
            <h2 class="text-danger">BSc (Hons) Computing (Data Analytics & Big Data)</h2>
            <p class="text-muted">
                <strong>Institution:</strong> Dublin Business School<br>
                <strong>Year:</strong> Sep 2022 - Apr 2026<br>
                <strong>Focus:</strong> Big Data, Data Analytics, Software Development, and Cloud Computing.
            </p>
        </div>
    </div>

    <!-- Skills Section -->
    <h2 class="text-white mb-4">Technical Skills</h2>
    <div class="row text-muted">
        <div class="col-md-6 mb-3">
            <ul>
                <li><strong>Data Science & Analysis Tools:</strong> Python, Pandas, NumPy, Scikit-learn</li>
                <li><strong>Data Visualization & Presentation:</strong> Power BI, Matplotlib, Seaborn, Dash, Folium</li>
                <li><strong>Databases:</strong> MS SQL Server, MariaDB, Data Querying, Stored Procedures, Views</li>
            </ul>
        </div>
        <div class="col-md-6 mb-3">
            <ul>
                <li><strong>Data Extraction & Web Scraping:</strong> BeautifulSoup, Requests, JSON, REST APIs</li>
                <li><strong>Advanced Excel:</strong> Pivot Tables, Data Visualization, Lookup Functions, Dynamic Charts</li>
                <li><strong>Automation & Version Control:</strong> Git, CI/CD Processes, Agile Methodology</li>
                <li><strong>Programming:</strong> C#, .NET (WPF, ASP.NET), HTML, PHP, Bootstrap</li>
            </ul>
        </div>
    </div>

    <!-- Coursework Section -->
    <h2 class="text-white mb-4">Relevant Coursework</h2>
    <div class="row text-muted">
        <div class="col-md-6 mb-3">
            <!-- Year 1 -->
            <h4 class="text-danger mt-4">Year 1</h4>
            <ul class="text-muted">
                <li>Computer Architecture</li>
                <li>Fundamentals of Information Systems</li>
                <li>Information and Communication Technology Essentials</li>
                <li>Introduction to Cloud Computing</li>
                <li>Introduction to Web Development</li>
                <li>Logic & Problem Solving</li>
                <li>Mathematics and Statistics for Computing</li>
                <li>Programming Fundamentals</li>
            </ul>
            <!-- Year 3 -->
            <h4 class="text-danger mt-4">Year 3</h4>
            <ul class="text-muted">
                <li>Advanced Web Development</li>
                <li>Foundations in Data Science</li>
                <li>Systems Analysis & Design</li>
                <li>Work Placement / Project</li>
            </ul>
        </div>
        <div class="col-md-6 mb-3">

            <!-- Year 2 -->
            <h4 class="text-danger mt-4">Year 2</h4>
            <ul class="text-muted">
                <li>Algorithms and Data Structures</li>
                <li>Data Communications & Networks</li>
                <li>Database Systems</li>
                <li>IT Project Management</li>
                <li>Object-Oriented Programming</li>
                <li>Operating Systems</li>
                <li>Software Engineering</li>
                <li>Web Development</li>
            </ul>  
            <!-- Year 4 -->
            <h4 class="text-danger mt-4">Year 4</h4>
            <ul class="text-muted">
                <li>Big Data: Achieving Scale</li>
                <li>Cyber Security</li>
                <li>Data Mining & Big Data Analytics</li>
                <li>Final Year Project</li>
            </ul>
        </div>
    </div>

    <!-- Extracurricular Activities -->
    <h2 class="text-white mt-5 mb-4">Extracurricular Activities</h2>
    <ul class="text-muted">
        <li><strong>President, Data Analytics Society:</strong> Organized workshops, trained students in Python, and enhanced engagement with data analytics projects.</li>
        <li><strong>Class Representative:</strong> Represented a cohort of 62 students, communicated directly with academic operations, and resolved issues efficiently.</li>
        <li><strong>Fitness Enthusiast:</strong> Completed a 5K run in 25:49 after focusing on pacing and goal setting, demonstrating determination and resilience.</li>
    </ul>
</div>

<!-- Custom CSS -->
<style>
    /* Background and Typography */
    body {
        background-color: #1a1a1a;
    }
    .text-white {
        color: #f0f0f0 !important;
    }
    .text-muted {
        color: #d3d3d3 !important;
    }
    .text-danger {
        color: #ff4d4d;
    }

    /* Scoped List Styling for Education Page */
    .container ul {
        list-style-type: none; /* Remove default bullet points */
        padding: 0;
    }
    .container ul li::before {
        content: "•"; /* Add red bullet point */
        color: #ff4d4d;
        margin-right: 10px;
    }

    /* Navbar Alignment */
    nav a, nav .btn {
        margin: 0 10px;
    }
    .navbar-nav {
        justify-content: center;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container ul li {
            font-size: 0.9rem;
        }
    }
</style>


<?php include 'includes/footer.php'; ?> <!-- Include the footer -->
