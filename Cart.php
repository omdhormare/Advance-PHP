<?php

// Database connection
$hostname = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli("localhost","root","","cart" );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add to cart functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO cart (product_id, quantity) VALUES ('$product_id', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display products
$sql_products = "SELECT * FROM products";
$result_products = $conn->query($sql_products);

// Display cart
$sql_cart = "SELECT products.name, products.price, cart.quantity FROM products JOIN cart ON products.id = cart.product_id";
$result_cart = $conn->query($sql_cart);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 20px;
        }

        .product {
            margin-bottom: 10px;
        }

        .cart {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Display Products -->
        <div class="products">
            <h2>Products</h2>
            <?php if ($result_products->num_rows > 0) {
                while ($row = $result_products->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<p>Product ID: " . $row["id"] . "</p>";
                    echo "<p>Name: " . $row["name"] . "</p>";
                    echo "<p>Price: $" . $row["price"] . "</p>";
                    echo "<form method='POST' action=''>";
                    echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
                    echo "<label for='quantity'>Quantity:</label>";
                    echo "<input type='number' name='quantity' value='1' min='1'>";
                    echo "<button type='submit'>Add to Cart</button>";
                    echo "</form>";
                    echo "</div>";
                }
            } else {
                echo "No products found";
            }
            ?>
        </div>

        <!-- Display Cart -->
        <div class="cart">
            <h2>Shopping Cart</h2>
            <?php if ($result_cart->num_rows > 0) {
                while ($row = $result_cart->fetch_assoc()) {
                    echo "<div>";
                    echo "<p>Product: " . $row["name"] . "</p>";
                    echo "<p>Price: $" . $row["price"] . "</p>";
                    echo "<p>Quantity: " . $row["quantity"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Cart is empty";
            }
            ?>
        </div>

    </div>

</body>

</html>

<?php
$conn->close();
?>
