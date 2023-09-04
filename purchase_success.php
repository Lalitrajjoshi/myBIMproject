<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if the purchase data is available in the session
if (isset($_SESSION["product_id"]) && isset($_SESSION["quantity"])) {
    $product_id = $_SESSION["product_id"];
    $quantity = $_SESSION["quantity"];
    
    // TODO: Insert the purchase data into the "orders" table in your database
    // Replace the placeholders with your actual database connection code
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL statement to insert the order
    $user_id = $_SESSION["user_id"];
    $sql = "INSERT INTO orders (customer_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        $purchase_success_message = "Your purchase was successful!";
    } else {
        $purchase_success_message = "Error placing your order: " . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Clear the session data related to the purchase
    unset($_SESSION["product_id"]);
    unset($_SESSION["quantity"]);
} else {
    // Redirect the user to the homepage if no purchase data is available
    header("Location: homepage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Success</title>
</head>
<body>
    <h1>Purchase Successful</h1>
    <p><?php echo $purchase_success_message; ?></p>
    <a href="homepage.php">Back to Homepage</a>
</body>
</html>
