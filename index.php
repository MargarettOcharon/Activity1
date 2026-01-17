<!DOCTYPE html>
<html>
<head>
    <title>My Personal Profile</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 20px;
        }
        .container {
            background: white;
            width: 80%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }
        img {
            width: 150px;
            border-radius: 50%;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="profile.jpg" alt="My Photo">

    <?php
        $name = "Lynn Margarett M. Ocharon";
        $student_status = "Student";
        $age = 21;
        $section = "IT3R11";
        $course = "Bachelor of Science in Information Technology (BSIT)";
        $school = "University of Science and Technology of Southern Philippines (USTP)";
        $contact = "09565218332";
        $email = "ocharon.lynnmargarett@gmail.com";
        $facebook = "Marga Metillo Ocharon";
        $hobbies = "Nature & Watching Kdrama's";
    ?>

    <!-- Name and Student -->
    <h1><?php echo $name; ?></h1>
    <p style="font-size: 18px; font-weight: bold; color: #555;"><?php echo $student_status; ?></p>

    <!-- Personal Details -->
    <div style="font-family: 'Arial', sans-serif; background: #f0f0f0; padding: 15px; border-radius: 10px; margin-bottom: 15px;">
        <p><strong>Age:</strong> <?php echo $age; ?></p>
        <p><strong>Section:</strong> <?php echo $section; ?></p>
        <p><strong>Course:</strong> <?php echo $course; ?></p>
        <p><strong>School:</strong> <?php echo $school; ?></p>
        <p><strong>Contact #:</strong> <?php echo $contact; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Facebook:</strong> <?php echo $facebook; ?></p>
        <p><strong>Hobbies:</strong> <?php echo $hobbies; ?></p>
    </div>

    <!-- Personal Profile Section -->
    <h2>Personal Profile</h2>
    <p>
        I am a motivated student who is passionate about learning technology and improving my programming skills.
    </p>

    <!-- Education Background Section -->
<h2 style="font-family: Arial, sans-serif; color: #333;">Education Background</h2>
<ul style="font-family: Arial, sans-serif; line-height: 1.6; color: #555;">
    <li>Nursery - Bayacabac, Maribojoc, Bohol</li>
    <li>Preschool - Bonbon, Cagayan De Oro City</li>
    <li>Grade 1 - 5 - Bonbon Elementary School CDO</li>
    <li>Grade 6 - Bayacabac Elementary School Bohol</li>
    <li>High School - Dr. Cecilio Putong National High School</li>
    <li>Senior High - Dr. Cecilio Putong National High School</li>
    <li>College 1st - 3rd year - University of Science and Technology of Southern Philippines</li>
</ul>

</div>

</body>
</html>
