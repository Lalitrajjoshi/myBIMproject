<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    // Redirect to the login page or display an error message if the user is not logged in.
    header("Location: login.php");
    exit();
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
        $customerId = $_SESSION["user_id"]; // Retrieve the customer ID from the session

        // Connect to the database
        $connection = mysqli_connect('localhost', 'root', '', 'Audhunik_Krishi_db');

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // Prepare and execute a query to insert the order into the tool_orders table
        $query = "INSERT INTO tool_orders (customer_id, tool_id, quantity) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($connection, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "iii", $customerId, $productId, $quantity);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                // Order successfully placed
                echo "Order placed successfully!";
            } else {
                // Handle the error if the order insertion fails
                echo "Error placing the order: " . mysqli_error($connection);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing the statement: " . mysqli_error($connection);
        }

        mysqli_close($connection);
    }
} else {
    echo "Invalid product ID.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Purchase Product</title>
    <style>
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
    <h1>Purchase Product</h1>
    
    <!-- Display the product details here if needed -->
    
    <form method="POST" action="">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required min="1" value="1">
        
        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required>
            <option value="cash_on_delivery">Cash on Delivery</option>
            <option value="online_payment">Online Payment</option>
        </select>
        
        <button type="submit">Place Order</button>
    </form>
</body>
</html>
