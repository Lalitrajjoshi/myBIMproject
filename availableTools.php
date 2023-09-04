<?php
session_start();
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rent Your Tools - Adhunik Krishi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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

    /* Custom styles for enhancements*/ 
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
      text-align: left;
    }

    td img {
      max-width: 100px;
      height: auto;
    }

    .book-button {
      background-color: #76b852;
      color: #fff;
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .book-button:hover {
      background-color: #539736;
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
    /* Footer */
    footer {
      background-color: #76b852;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
    </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="adhunikKrishilogo.png" alt="Adhunik Krishi Logo">
    </div>
    <nav>
    <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="rentTools.php">Rent Tools</a></li>
        <li><a href="availableTools.php">Available Tools</a></li>
        <li><a href="#">Profile</a></li>
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

<section>
      <h3>Available Tools for Rent</h3>
      <table>
        <tr>
          <th>Tool Name</th>
          <th>Tool Type</th>
          <th>Description</th>
          <th>Rental Rate</th>
          <th>Contact Information</th>
          <th>Tool Photo</th>
          <th>Actions</th>
        </tr>
        <?php
        // Establish database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Audhunik_krishi_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Fetch and display data
        $sql = "SELECT * FROM tool_rentals";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['tool_name'] . "</td>";
            echo "<td>" . $row['tool_type'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['rental_rate'] . "</td>";
            echo "<td>" . $row['contact_info'] . "</td>";
            echo "<td><img src='" . $row['photo_path'] . "' alt='Tool Photo' width='100'></td>";
            echo "<td><button class='book-button'>Book</button></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='7'>No tools available for rent.</td></tr>";
        }

        $conn->close();
        ?>
      </table>
    </section>
    </div>

<footer>
  <p>&copy; 2023 Adhunik Krishi. All rights reserved.</p>
</footer>
</body>
</html>