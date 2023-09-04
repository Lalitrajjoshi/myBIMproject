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

   /* Custom styles for enhancements 
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
*/
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
   .tool-photo {
     width: 100%;
     max-width: 600px;
     height: 500px;
     margin-top: 10px;
   }

   
/* Style for the Available Tools (Verified) section heading */
section h3 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333; /* Change the color to your preference */
}

/* Style for the table */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  border: 1px solid #ddd; /* Add a border around the table */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
}

/* Style for table headers */
th {
  background-color: #76b852;
  color: #fff;
  text-align: left;
  padding: 12px;
}

/* Style for table data cells */
td {
  padding: 12px;
}

/* Style for even rows */
tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Style for odd rows */
tr:nth-child(odd) {
  background-color: #fff;
}

/* Style for table rows on hover */
tr:hover {
  background-color: #ddd;
}

/* Style for table images */
td img {
  max-width: 100px;
  height: auto;
  display: block;
  margin: 0 auto;
}

/* Style for the "No verified tools found" message */
tr.no-data td {
  text-align: center;
  color: #777;
  font-style: italic;
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
      <img src="rentTools.png" alt="User Icon">
      <div class="user-dropdown">
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a>
        <a href="register.php">Register</a>
      </div>
    </div>
  </header>

  <div class="container">
    <section>
      <h2>Rent Your Tools</h2>
      <p>List your tools available for rent and connect with others.</p>
      <img src="rentImg.png" class="tool-photo" alt="Rent Your Tools Image">
    </section>

    <section>
      <h3>Tool Rental Form</h3>
      <form enctype="multipart/form-data" method="post">
        <label for="toolName">Tool Name:</label>
        <input type="text" id="toolName" name="toolName" placeholder="Enter tool name">
        
        <label for="toolType">Tool Type:</label>
        <select id="toolType" name="toolType">
          <option value="agricultural">Agricultural Tool</option>
          <option value="garden">Garden Tool</option>
          <option value="harvesting">Harvesting Tool</option>
          <option value="irrigation">Irrigation Tool</option>
        </select>

        <label for="description">Description:</label>
        <textarea id="description" name="description" placeholder="Enter tool description"></textarea>
        
        <label for="rentalRate">Rental Rate:</label>
        <input type="text" id="rentalRate" name="rentalRate" placeholder="Enter rental rate">
        
        <label for="contact">Contact Information:</label>
        <input type="text" id="contact" name="contact" placeholder="Enter contact information">
        
        <label for="toolPhoto">Tool Photo:</label>
        <input type="file" id="toolPhoto" name="toolPhoto">
        
        <button type="submit">List for Rent</button>
      </form>
      <?php
$uploadDirectory = 'uploads/';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tool_name = $_POST["toolName"];
    $toolType = $_POST["toolType"];
    $description = $_POST["description"];
    $rentalRate = $_POST["rentalRate"];
    $contact = $_POST["contact"];

    // Handling image upload
    $imageName = $_FILES['toolPhoto']['name'];
    $targetPath = $uploadDirectory . $imageName;

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'Audhunik_Krishi_db';

    // Establish database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database
    $insertSQL = "INSERT INTO tool_rentals (tool_name, tool_type, description, rental_rate, contact_info, photo_path) VALUES ('$tool_name', '$toolType', '$description', '$rentalRate', '$contact', '$targetPath')";

    if ($conn->query($insertSQL) === TRUE) {
        move_uploaded_file($_FILES['toolPhoto']['tmp_name'], $targetPath);
        echo "<p class='success-message'>Tool listed for rent successfully!</p>";
    } else {
        echo "<p class='error-message'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
    </section>
    
    <section>
      <h3>Available Tools (Verified)</h3>
      <table>
        <thead>
          <tr>
            <th>Tool ID</th>
            <th>Tool Name</th>
            <th>Tool Type</th>
            <th>Description</th>
            <th>Rental Rate</th>
            <th>Contact Info</th>
            <th>Photo</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $servername = 'localhost';
          $username = 'root';
          $password = '';
          $dbname = 'Audhunik_Krishi_db';

          // Establish database connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Select only verified tools posted by users
          $sql = "SELECT * FROM tool_rentals WHERE verify_status = 1"; // Assuming 1 indicates verified status

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["tool_name"] . "</td>";
              echo "<td>" . $row["tool_type"] . "</td>";
              echo "<td>" . $row["description"] . "</td>";
              echo "<td>" . $row["rental_rate"] . "</td>";
              echo "<td>" . $row["contact_info"] . "</td>";
              echo "<td><img src='" . $row["photo_path"] . "' alt='" . $row["tool_name"] . "'></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='7'>No verified tools found.</td></tr>";
          }

          $conn->close();
          ?>
        </tbody>
      </table>
    </section>
  </div>

  <footer>
    <p>&copy; 2023 Adhunik Krishi. All rights reserved.</p>
  </footer>
</body>
</html>
