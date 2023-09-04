<?php
session_start();
include "session.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Adhunik Krishi - Disease Diagnosis</title>
  <style>
    /* Reset default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f3f7ed;
      font-family: Arial, sans-serif;
    }

    /* Header */
    header {
      background-color: #76b852;
      padding: 4px;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo img {
      width: 150px;
      height: auto;
      filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.2));
    }

    h1 {
      font-size: 24px;
    }

    /* Navigation Menu */
    nav ul {
      list-style: none;
      display: flex;
      justify-content: flex-start;
      margin-top: 20px;
    }

    nav ul li {
      margin-right: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #539736;
    }

    /* User Profile */
    .user-profile {
      display: flex;
      align-items: center;
    }

    .user-profile img {
      width: 30px;
      height: 30px;
      margin-right: 10px;
      cursor: pointer;
    }

    .user-dropdown {
      display: none;
      position: absolute;
      top: 35px;
      right: 0;
      background-color: #76b852;
      padding: 10px;
      border-radius: 4px;
    }

    .user-profile:hover .user-dropdown {
      display: block;
    }

    .user-dropdown a {
      display: block;
      color: #fff;
      text-decoration: none;
      margin-bottom: 5px;
      transition: color 0.3s;
    }

    .user-dropdown a:hover {
      color: #539736;
    }

    /* Main Content */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px;
    }

    section {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      margin-bottom: 20px;
    }

    h2 {
      color: #76b852;
      margin-bottom: 20px;
    }

    p {
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    select,
    input[type="file"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    input[type="file"] {
      cursor: pointer;
    }

    input[type="submit"] {
      background-color: #76b852;
      color: #fff;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #539736;
    }

    /* Submenu */
    .submenu {
      position: relative;
    }

    .submenu-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      padding: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      z-index: 1;
    }

    .submenu:hover .submenu-content {
      display: block;
    }

    .submenu-content a {
      display: block;
      color: #76b852;
      text-decoration: none;
      padding: 5px 0;
    }

    .submenu-content a:hover {
      background-color: #f3f7ed;
    }

    /* Footer */
    footer {
      background-color: #76b852;
      padding: 20px;
      color: #fff;
      text-align: center;
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .container {
        grid-template-columns: 1fr;
      }
    }

    /* New styles for About and Contact sections */
    .about-section {
      background-color: #f9f9f9;
      padding: 40px 0;
      text-align: center;
    }

    .about-logo img {
      width: 120px;
      height: auto;
    }

    .contact-section {
      background-color: #f3f3f3;
      padding: 40px 0;
      text-align: center;
    }

    .contact-info {
      margin-top: 20px;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">
      <img src="adhunikkrishilogo.PNG" alt="Adhunik Krishi Logo">
    </div>
    <nav>
      <ul>
        <li><a href="homepage.php">Home</a></li>
        <li class="submenu">
          <a href="seeds.php">Seeds</a>
          <div class="submenu-content">
            <a href="#">Flower Seeds</a>
            <a href="#">Vegetable Seeds</a>
            <a href="#">Fruit Seeds</a>
            <a href="#">Herb Seeds</a>
          </div>
        </li>
        <li class="submenu">
          <a href="agricultureTools.php">Tools</a>
          <div class="submenu-content">
            <a href="#">Agricultural Tools</a>
            <a href="#">Garden Tools</a>
            <a href="#">Harvesting Tools</a>
            <a href="#">Irrigation Tools</a>
          </div>
        </li>
        <li class="submenu">
          <a href="experts.php">Experts</a>
          <div class="submenu-content">
            <a href="#">Bee Expert</a>
            <a href="#">Fishery Expert</a>
            <a href="#">Agriculture Expert</a>
            <a href="#">Horticulture Expert</a>
          </div>
        </li>
        <li><a href="DiseaseDiagnosis.php">Disease Diagnosis</a></li>
      </ul>
    </nav>
    <div class="user-profile">
      <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="User Icon">
      <div class="user-dropdown">
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a>
        <a href="register.php">Register</a>
      </div>
    </div>
  </header>

  <div class="container">
    <section>
      <h2>Select the Type of Disease</h2>
      <form method="POST" action="" enctype="multipart/form-data">
        <label for="disease-type">Disease Type:</label>
        <select id="disease-type" name="disease-type" required>
          <option value="">Select Disease Type</option>
          <option value="plant">Plant Disease</option>
          <option value="animal">Animal Disease</option>
          <option value="fish">Fish Disease</option>
          <option value="bee">Bee Disease</option>
          <option value="vegetable">Vegetable Disease</option>
        </select>
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" name="submit" value="Diagnose">
      </form>

      <?php
      // Check if the form is submitted
      if (isset($_POST['submit'])) {
        // Retrieve form data
        $diseaseType = $_POST['disease-type'];
        $imagePath = $_FILES['image']['tmp_name'];

        // Connect to the database
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'Audhunik_Krishi_db';

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
          die('Connection failed: ' . $conn->connect_error);
        }
        

        // Store the image file in a location of your choice
        $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/Audhunik_Krishi/adminpanal/uploads/'; // Note the use of double backslashes for escaping
        $imageName = $_FILES['image']['name'];
        $targetPath = $uploadDirectory . $imageName;



        if (move_uploaded_file($imagePath, $targetPath)) {
          // Perform disease diagnosis using AI (implementation depends on your AI model)
      
          // Retrieve the user ID from the session
          $customerId = $_SESSION["user_id"];

          // Perform database insert with user ID
          $sql = "INSERT INTO disease_db (disease_type, image_path, customer_id) VALUES ('$diseaseType', '$targetPath', '$customerId')";

          if ($conn->query($sql) === TRUE) {
            echo '<p>Diagnosis result stored in the database.</p>';
          } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
          }
        } else {
          echo 'Failed to upload the image.';
        }

        $conn->close();
      }
      ?>
    </section>
  </div>

  <section class="about-section">
    <h3>About Adhunik Krishi</h3>
    <p>
      Adhunik Krishi is your one-stop platform for modern agricultural solutions. We provide genuine seeds, high-quality
      tools, expert advice, and disease diagnosis services to farmers. Our mission is to empower farmers with the
      knowledge and resources they need to thrive in the world of agriculture.
    </p>
    <div class="about-logo">
      <img src="adhunikkrishilogo.PNG" alt="Adhunik Krishi Logo">
    </div>
  </section>

  <section class="contact-section">
    <h3>Contact Us</h3>
    <p>
      For inquiries and support, you can reach us at:
    </p>
    <div class="contact-info">
      <p>Address: Santoshi Tole-2, Dhangadhi, Nepal</p>
      <p>Email: spadhangadhi@gmail.com</p>
      <p>Phone: 977-091-520392</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Adhunik Krishi. All rights reserved.</p>
  </footer>

</body>

</html>