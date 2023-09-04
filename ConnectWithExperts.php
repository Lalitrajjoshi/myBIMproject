<?php
session_start();
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Connect with Experts</title>
  <style>
    /*  CSS styles */
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
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }
    textarea {
      resize: vertical;
      height: 150px;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #76b852;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #539736;
    }
    .success-message {
      margin-top: 20px;
      text-align: center;
      color: #76b852;
      font-weight: bold;
    }
    .error-message {
      margin-top: 20px;
      text-align: center;
      color: #ff0000;
      font-weight: bold;
    }
    .compact-table {
      margin-top: 40px;
      width: 100%;
      border-collapse: collapse;
    }
    .compact-table th,
    .compact-table td {
      padding: 8px;
      border: 1px solid #ccc;
    }
    .compact-table th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    .compact-table tr:nth-child(even) {
      background-color: #f9f9f9;
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
    <h1>Connect with Experts</h1>
    <form action="" method="post">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Your Email:</label>
      <input type="text" id="email" name="email" required>
      <label for="message">Your Message:</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Submit</button>
    </form>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve the form data
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      // Save the message to the database or send an email to the experts
      // Implement your logic here

      // Display success message
      echo '<p class="success-message">Your message has been submitted successfully. Our experts will get back to you soon.</p>';
    }
    ?>

    <table class="compact-table">
      <thead>
        <tr>
          <th>Expert Name</th>
          <th>Expertise</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John Doe</td>
          <td>Agricultural Engineering</td>
          <td>Email: john@example.com<br>Phone: 123-456-7890</td>
        </tr>
        <tr>
          <td>Jane Smith</td>
          <td>Horticulture</td>
          <td>Email: jane@example.com<br>Phone: 987-654-3210</td>
        </tr>
        <!-- Add more rows for other experts if needed -->
      </tbody>
    </table>

    <div class="video-tutorials">
  <h2>Video Tutorials</h2>
  <div class="video">
  <div class="video-tutorials">
  <h2>Video Tutorials</h2>
  <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/t8k0-HOM9o4" frameborder="0" allowfullscreen></iframe>
  </div>
  
  </div>
  <!-- Add more videos if needed -->
</div>

    <div class="articles">
  <h2>Articles</h2>
  <div class="article">
    <p>
      Check out this informative article: 
      <a href="https://www.nepjol.info/index.php/NARJ/issue/view/3106" target="_blank">
        "Article Title"
      </a>
    </p>
  </div>
  <!-- Add more articles if needed -->
</div>

    <div class="updates">
      <h2>New Updates</h2>
      <div class="update">
        <!-- Add your update content here -->
      </div>
      <!-- Add more updates if needed -->
    </div>
  </div>

  <section class="about-section">
    <h3>About Adhunik Krishi</h3>
    <p>
      Adhunik Krishi is your one-stop platform for modern agricultural solutions. We provide genuine seeds, high-quality tools, expert advice, and disease diagnosis services to farmers. Our mission is to empower farmers with the knowledge and resources they need to thrive in the world of agriculture.
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
