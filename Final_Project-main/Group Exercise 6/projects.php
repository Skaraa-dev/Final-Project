<?php
session_start(); // Start session to track user sessions

// Check if a theme cookie exists, if not set a default theme
if (!isset($_COOKIE['theme'])) {
    setcookie('theme', 'light', time() + (86400 * 30), "/"); // 30 days expiration
}

// Update the theme based on the user's selection from the switch
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['theme'])) {
    $theme = htmlspecialchars($_POST['theme']);
    setcookie('theme', $theme, time() + (86400 * 30), "/"); // Save the theme in a cookie
    $_SESSION['theme'] = $theme; // Store the theme in the session
} else {
    $theme = $_COOKIE['theme']; // Get the theme from the cookie
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="Group exercise.css">
    <style>
        body {
            background-color: <?php echo $theme == 'dark' ? '#333' : 'rgb(250, 246, 224)'; ?>;
            color: <?php echo $theme == 'dark' ? '#fff' : '#000'; ?>;
        }
        .project-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .project {
            background-color: <?php echo $theme == 'dark' ? '#444' : '#fff'; ?>;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .project img {
            width: 100%;
            border-radius: 8px;
        }
        footer {
            background-color: #606770;
            text-align: center;
            padding: 10px; /* Increased padding for more space */
            position: relative; /* Ensure it flows with the content */
            width: 100%;
            bottom: 0;
            margin-top: 160px;
        }
    </style>
</head>
<body>

<div class="navigation-buttons">
            <a href="Group exercise.php" style="text-decoration: none; color: inherit;">
                <button class="nav-button">Home</button>
            </a>
            <a href="projects.php" style="text-decoration: none; color: inherit;">
                <button class="nav-button">Our Projects</button>
            </a>
        </div>

    <div class="container">
        <header>
            <h1>Our Projects</h1>
        </header>

        <div class="project-container">
            <div class="project">
                <img src="pics/dental.jpg" alt="Dental Clinic Management System">
                <h2>Dental Clinic Management System</h2>
                <p>A C# application designed to streamline dental clinic operations. It allows users to manage a patient list, maintain a service catalog, schedule appointments, and create prescriptions efficiently. The system simplifies clinic workflows and enhances patient care management.</p>
            </div>
            <div class="project">
                <img src="pics/payslip.jpg" alt="Bandejes Corp. Payslip System">
                <h2>Bandejes Corp. Payslip System</h2>
                <p>A C# application designed for payroll management. It enables users to input the employer's name, number of work hours, and hourly pay. The system calculates the total pay and generates a payslip, which can also be printed for record-keeping.</p>
            </div>
            <div class="project">
                <img src="pics/todo.jpg" alt="TO DO LIST">
                <h2>TO DO LIST</h2>
                <p>A minimalist website designed to help users stay organized. It features a simple interface with a textbox and an "Add" button. Users can quickly type tasks for the day, add them to their to-do list, and manage them by crossing off completed tasks or deleting them as needed.</p>
            </div>
            <div class="project">
                <img src="pics/webproj.jpg" alt="MODA Online Fashion Store">
                <h2>MODA</h2>
                <p>A stylish online fashion store for men and women. It offers a wide range of outfits on its shop page, allowing users to browse and select their favorite pieces. With a convenient bag button, shoppers can easily review their selected items and proceed to checkout for a seamless shopping experience.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Group 4 Web Project. All rights reserved.</p>
        <p>When someone is in need, Group 4 is indeed!</p>
    </footer>
</body>
</html>