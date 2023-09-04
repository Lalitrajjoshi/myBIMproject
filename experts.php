<?php
session_start();
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Adhunik Krishi - Experts</title>
  <style>
    /* CSS styles */
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
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .filter-panel {
      background-color: #f3f7ed;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
      width: 250px;
      float: left;
    }

    .filter-panel h3 {
      margin-bottom: 10px;
    }

    .filter-panel label {
      display: block;
      margin-top: 10px;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .filter-panel input[type="text"],
    .filter-panel select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .filter-panel button[type="submit"] {
      background-color: #76b852;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }

    .expert-list {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 20px;
    }

    .expert-profile {
      background-color: #fff;
      padding: 20px;
      text-align: center;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .expert-profile img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin-bottom: 10px;
      border-radius: 50%;
    }

    .expert-profile h4 {
      color: #76b852;
      margin-bottom: 10px;
    }

    .expert-profile p {
      margin-bottom: 10px;
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
    <div class="filter-panel">
      <h3>Filter Experts</h3>
      <form id="filter-form" method="GET" action="">
        <label for="expertise">Expertise:</label>
        <select id="expertise" name="expertise">
          <option value="">All Expertise</option>
          <option value="Bee Expert">Bee Expert</option>
          <option value="Fishery Expert">Fishery Expert</option>
          <option value="Agriculture Expert">Agriculture Expert</option>
          <option value="Horticulture Expert">Horticulture Expert</option>
        </select>

        <label for="experience">Experience:</label>
        <select id="experience" name="experience">
          <option value="">All Experience</option>
          <option value="1-5 years">1-5 years</option>
          <option value="5-10 years">5-10 years</option>
          <option value="10+ years">10+ years</option>
        </select>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" placeholder="Enter your location">

        <button type="submit">Apply Filters</button>
      </form>
    </div>

    <div class="expert-list">
    <?php
    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'Audhunik_Krishi_db');

    // Check if the connection was successful
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }

    // Prepare the SQL query based on the selected filters
    $sql = "SELECT * FROM experts_db WHERE 1";

    if (!empty($_GET['expertise'])) {
      $expertise = $_GET['expertise'];
      $sql .= " AND expertise = '$expertise'";
    }

    if (!empty($_GET['experience'])) {
      $experience = $_GET['experience'];
      $sql .= " AND experience = '$experience'";
    }

    if (!empty($_GET['location'])) {
      $location = $_GET['location'];
      $sql .= " AND location = '$location'";
    }

    // Execute the SQL query
    $result = mysqli_query($connection, $sql);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
      // Loop through each row and display the expert profile
      while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $expertise = $row['expertise'];
        $experience = $row['experience'];
        $location = $row['location'];
        $image = $row['image'];

        // Display the expert profile
        echo '<div class="expert-profile">';
        echo '<img src="' . $image . '" alt="' . $name . '">';
        echo '<h4>' . $name . '</h4>';
        echo '<p><strong>Expertise:</strong> ' . $expertise . '</p>';
        echo '<p><strong>Experience:</strong> ' . $experience . '</p>';
        echo '<p><strong>Location:</strong> ' . $location . '</p>';
        echo '</div>';
      }
    } else {
      echo '<p>No experts found.</p>';
    }

    // Close the database connection
    mysqli_close($connection);
    ?>

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

  <script>
    // Add event listener to the filter form submit event
    document.getElementById('filter-form').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // Get the selected filter values
      var expertise = document.getElementById('expertise').value;
      var experience = document.getElementById('experience').value;
      var location = document.getElementById('location').value;

      // Construct the URL with the selected filters
      var url = '?expertise=' + encodeURIComponent(expertise) +
                '&experience=' + encodeURIComponent(experience) +
                '&location=' + encodeURIComponent(location);

      // Redirect to the URL with the selected filters
      window.location.href = url;
    });
  </script>
</body>
</html>
