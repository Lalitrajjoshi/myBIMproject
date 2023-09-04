<?php
session_start();
include "session.php";

// Check if the product ID is provided in the URL
if (isset($_GET['id'])) {
    // Get the product ID from the URL
    $productId = $_GET['id'];

    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'Audhunik_Krishi_db');

    // Check if the connection was successful
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Prepare an SQL query to fetch product details based on the provided ID
    $sql = "SELECT * FROM seeds_db WHERE id = $productId";

    // Execute the SQL query
    $result = mysqli_query($connection, $sql);

    // Check if a product with the provided ID was found
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $productName = $row['name'];
        $productPrice = $row['price'];

        // Close the database connection
        mysqli_close($connection);
    } else {
        echo "Product not found.";
        exit();
    }
} else {
    echo "Product ID not provided.";
    exit();
}

// Handle the form submission for purchase
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user is logged in (you should implement user authentication)
    if (isset($_SESSION['user_id'])) {
        // Retrieve and sanitize user input (you should add more validation and security measures)
        $quantity = intval($_POST['quantity']); // Convert quantity to an integer
        $customerId = $_SESSION['user_id'];

        // Get the current date and time
        $orderDate = date('Y-m-d H:i:s'); // Format: YYYY-MM-DD HH:MM:SS

        // Connect to the database
        $connection = mysqli_connect('localhost', 'root', '', 'Audhunik_Krishi_db');

        // Check if the connection was successful
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // Insert the order details into the orders table with the order_date column
        $insertQuery = "INSERT INTO orders (customer_id, product_id, quantity, order_date) VALUES ($customerId, $productId, $quantity, '$orderDate')";
        $insertResult = mysqli_query($connection, $insertQuery);

        // Close the database connection
        mysqli_close($connection);

        // Check if the order was successfully placed
        if ($insertResult) {
            // Redirect to a success page or display a success message
            header("Location: purchase_success.php");
            exit();
        } else {
            // Handle the error, display an error message, or redirect to an error page
            echo "Failed to place the order: " . mysqli_error($connection);
        }
    } else {
        // User is not logged in, redirect them to the login page or display a message
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adhunik Krishi - Purchase</title>
    <style>
      /* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

h1 {
    color: #333;
    text-align: center;
    padding: 20px 0;
}

form {
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 400px;
}

form:hover {
    transform: scale(1.03);
    transition: transform 0.3s ease-in-out;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease-in-out;
}

input[type="number"]:focus {
    border-color: #4CAF50;
}

select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease-in-out;
}

select:focus {
    border-color: #4CAF50;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

button[type="submit"]:hover {
    background-color: #45a049;
    transform: scale(1.05);
}



    </style>
</head>
<body>
    <header>
        <!-- Your header content here -->
    </header>

    <div class="container">
        <h1>Purchase <?php echo $productName; ?></h1>
        <p>Product Price: $<?php echo $productPrice; ?></p>

        <form method="POST" action="">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" required>
            <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required>
            <option value="cash_on_delivery">Cash on Delivery</option>
            <option value="online_payment">Online Payment</option>
        </select>

            <button type="submit">Purchase</button>
        </form>
    </div>
    

    <footer>
        <!-- Your footer content here -->
    </footer>
</body>
</html>
