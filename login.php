<!DOCTYPE html>
<html>
<head>
  <title>Adhunik Krishi - Login</title>
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

    .login-box {
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
      display: flex;
      align-items: center;
    }

    .form-group label {
      flex: 1;
      font-size: 16px;
      font-weight: bold;
      text-align: right;
      margin-right: 10px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      flex: 1;
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

    .form-group .forgot-password {
      font-size: 14px;
      color: #999;
      text-align: left;
      margin-top: 10px;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <div class="logo">
        <img src="adhunikkrishilogo.PNG" alt="Adhunik Krishi Logo">
      </div>
      <?php
session_start(); // Start a session if not already started

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Configuration variables for database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Audhunik_Krishi_db";

  // Establishing database connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Checking connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $username = $_POST["username"];
  $password = $_POST["password"];

  // Check if the fields are empty
  if (empty($username) || empty($password)) {
    echo '<script>alert("Please enter both username and password.");</script>';
  } else {
    // Prepare and execute the SELECT statement to check username and password
    $stmt = $conn->prepare("SELECT * FROM register_db WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();


    
 // If the login is successful, set the session variable to store the user's ID
if ($result->num_rows > 0) {
  // Set the session variable to store the user's ID
  $_SESSION["user_id"] = $result->fetch_assoc()['id'];

  // Redirect to homepage
  header("Location: homepage.php");
  exit();
}


 else {
      echo '<script>alert("Username and password do not match.");</script>';
    }

    // Close the prepared statement
    $stmt->close();
  }

  // Close the database connection
  $conn->close();
}

// Check if the user is logged in
if (isset($_SESSION["username"])) {
  // The user is logged in, redirect to homepage
  header("Location: homepage.php");
  exit();
}
?>
      <form method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <div class="form-group">
          <input type="submit" value="Log In">
        </div>
        <div class="form-group">
          <a href="#" class="forgot-password">Forgot password?</a>
        </div>
        <div class="form-group">
          <a href="register.php" class="forgot-password">Dont Have Account? Register here</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
