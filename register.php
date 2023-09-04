<?php
// Configuration variables for database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Audhunik_krishi_db";

// Establishing database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function validatePhoneNumber($phone_number) {
    // Validate phone number (allow only digits, spaces, and hyphens)
    return preg_match("/^[0-9\s-]+$/", $phone_number);
}

function validateAddress($address) {
    // Validate address (allow only alphabets and spaces)
    return preg_match("/^[A-Za-z\s]+$/", $address);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];

    // Validate phone number and address
    if (!validatePhoneNumber($phone_number)) {
        echo "Invalid phone number. Please enter a valid phone number.";
    } elseif (!validateAddress($address)) {
        echo "Invalid address. Please enter a valid address.";
    } else {
        // Prepare and bind the INSERT statement with address and phone_number fields
        $stmt = $conn->prepare("INSERT INTO register_db (name, email, username, password, address, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $username, $password, $address, $phone_number);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Registration successful.";
            // You can also redirect the user to a success page if needed.
        } else {
            echo "Error inserting record: " . $stmt->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Adhunik Krishi - Register</title>
  <style>
    body {
      background-color: #f3f7ed;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-box {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 40px;
      text-align: center;
    }

    .logo {
      margin-bottom: 20px;
    }

    .logo img {
      width: 150px;
      height: auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 5px;
      text-align: left;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="submit"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #76b852;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #539736;
    }

    .popup {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.5);
      visibility: hidden;
      opacity: 0;
      transition: visibility 0s, opacity 0.3s;
    }

    .popup.show {
      visibility: visible;
      opacity: 1;
    }

    .popup-content {
      background-color: #f5f9dc;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
    }

    .popup-message {
      color: #76b852;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .popup-close {
      position: absolute;
      top: 10px;
      right: 10px;
      color: #76b852;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
  <script>
    function validateForm() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      // Validate name (alphabet only)
      var nameRegex = /^[A-Za-z]+$/;
      if (!name.match(nameRegex)) {
        alert("Name should only contain alphabetic characters.");
        return false;
      }

      // Validate password (8 characters long)
      if (password.length < 8) {
        alert("Password should be at least 8 characters long.");
        return false;
      }

      // Additional validations for email, if needed

      // Form is valid, allow submission
      return true;
    }

    function showPopup() {
      var popup = document.getElementById("popup");
      popup.classList.add("show");
    }

    function closePopup() {
      var popup = document.getElementById("popup");
      popup.classList.remove("show");
    }

    window.addEventListener("click", function(event) {
      var popup = document.getElementById("popup");
      if (event.target == popup) {
        closePopup();
      }
    });
  </script>
</head>
<body>
  <div class="container">
    <div class="register-box">
      <div class="logo">
        <img src="adhunikkrishilogo.PNG" alt="Adhunik Krishi Logo">
      </div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return validateForm()">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <!-- Add Address Field -->
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>
        <!-- Add Phone Number Field -->
        <div class="form-group">
          <label for="phone_number">Phone Number:</label>
          <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
  <div id="popup" class="popup">
    <div class="popup-content">
      <p class="popup-message">Congratulations! Registration successful.</p>
      <span class="popup-close" onclick="closePopup()">&times;</span>
  </div>
</body>
</html>

  