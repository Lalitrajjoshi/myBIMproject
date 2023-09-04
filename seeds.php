<?php
session_start();
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Adhunik Krishi - Seeds</title>
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
      display: flex;
      justify-content: space-between;
    }

    .filter-panel {
      width: 30%;
      background-color: #f3f7ed;
      padding: 20px;
      border-radius: 5px;
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

    .seeds-list {
      width: 65%;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
    }

    .seed-item {
      background-color: #fff;
      padding: 20px;
      text-align: center;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .seed-item h4 {
      color: #76b852;
      margin-bottom: 10px;
    }

    .seed-item img {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .seed-item p {
      margin-bottom: 10px;
    }

    .seed-item .price {
      font-weight: bold;
    }

    .seed-item .buy-button {
      background-color: #76b852;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
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

    footer {
      background-color: #76b852;
      padding: 20px;
      color: #fff;
      text-align: center;
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

  <div class="container clearfix">
    <div class="filter-panel">
      <h3>Filter Seeds</h3>
      <form id="filter-form" method="GET" action="">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" placeholder="Enter your location">

        <label for="temperature">Surrounding Temperature:</label>
        <input type="text" id="temperature" name="temperature" placeholder="Enter temperature range">

        <label for="soil-ph">Soil pH Value:</label>
        <input type="text" id="soil-ph" name="soil-ph" placeholder="Enter pH range">

        <label for="humidity">Humidity:</label>
        <input type="text" id="humidity" name="humidity" placeholder="Enter humidity range">

        <label for="uv-index">UV Index:</label>
        <input type="text" id="uv-index" name="uv-index" placeholder="Enter UV index range">

        <label for="soil-type">Type of Soil:</label>
        <select id="soil-type" name="soil-type">
          <option value="">All Soil Types</option>
          <option value="sand">Sand</option>
          <option value="clay">Clay</option>
          <option value="silt">Silt</option>
          <option value="peat">Peat</option>
          <option value="chalk">Chalk</option>
          <option value="loam">Loam</option>
        </select>

        <label for="price">Price:</label>
        <select id="price" name="price">
          <option value="">All Prices</option>
          <option value="low">Low</option>
          <option value="medium">Medium</option>
          <option value="high">High</option>
        </select>

        <label for="brand">Brand:</label>
        <select id="brand" name="brand">
          <option value="">All Brands</option>
          <option value="brand1">Brand 1</option>
          <option value="brand2">Brand 2</option>
          <option value="brand3">Brand 3</option>
        </select>

        <button type="submit">Apply Filters</button>
      </form>
    </div>

    <div class="seeds-list">
      <?php
        // Connect to the database
        $connection = mysqli_connect('localhost', 'root', '', 'Audhunik_Krishi_db');

        // Check if the connection was successful
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
        }

        // Prepare the SQL query based on the selected filters
        $sql = "SELECT * FROM seeds_db WHERE 1";

        if (!empty($_GET['location'])) {
          $location = $_GET['location'];
          $sql .= " AND location = '$location'";
        }

        if (!empty($_GET['temperature'])) {
          $temperature = $_GET['temperature'];
          $sql .= " AND temperature = '$temperature'";
        }

        if (!empty($_GET['soil-ph'])) {
          $soilPh = $_GET['soil-ph'];
          $sql .= " AND soil_ph = '$soilPh'";
        }

        if (!empty($_GET['humidity'])) {
          $humidity = $_GET['humidity'];
          $sql .= " AND humidity = '$humidity'";
        }

        if (!empty($_GET['uv-index'])) {
          $uvIndex = $_GET['uv-index'];
          $sql .= " AND uv_index = '$uvIndex'";
        }

        if (!empty($_GET['soil-type'])) {
          $soilType = $_GET['soil-type'];
          $sql .= " AND soil_type = '$soilType'";
        }

        if (!empty($_GET['price'])) {
          $price = $_GET['price'];
          $sql .= " AND price = '$price'";
        }

        if (!empty($_GET['brand'])) {
          $brand = $_GET['brand'];
          $sql .= " AND brand = '$brand'";
        }

        // Execute the SQL query
        $result = mysqli_query($connection, $sql);

        // Check if there are any results
        if (mysqli_num_rows($result) > 0) {
          // Loop through each row and display the seed details
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id']; // Get the ID of the product
            $name = $row['name'];
            $description = $row['description'];
            $price = $row['price'];
            $image = $row['image'];
          
            // Display the seed details along with a link to buy
            echo '<div class="seed-item">';
            echo '<h4>' . $name . '</h4>';
            echo '<img src="' . $image . '" alt="' . $name . '">';
            echo '<p>' . $description . '</p>';
            echo '<p class="price"> NPR ' . $price . '</p>';
            // Add a link to buy with the product ID as a query parameter
            echo '<a href="purchase.php?id=' . $id . '" class="buy-button">Buy Now</a>';
            echo '</div>';
          }
          
        } else {
          echo '<p>No seeds found.</p>';
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
      var location = document.getElementById('location').value;
      var temperature = document.getElementById('temperature').value;
      var soilPh = document.getElementById('soil-ph').value;
      var humidity = document.getElementById('humidity').value;
      var uvIndex = document.getElementById('uv-index').value;
      var soilType = document.getElementById('soil-type').value;
      var price = document.getElementById('price').value;
      var brand = document.getElementById('brand').value;

      // Construct the URL with the selected filters
      var url = '?location=' + encodeURIComponent(location) +
                '&temperature=' + encodeURIComponent(temperature) +
                '&soil-ph=' + encodeURIComponent(soilPh) +
                '&humidity=' + encodeURIComponent(humidity) +
                '&uv-index=' + encodeURIComponent(uvIndex) +
                '&soil-type=' + encodeURIComponent(soilType) +
                '&price=' + encodeURIComponent(price) +
                '&brand=' + encodeURIComponent(brand);

      // Redirect to the URL with the selected filters
      window.location.href = url;
    });
  </script>


</body>
</html>
