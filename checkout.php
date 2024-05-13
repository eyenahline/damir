<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <h1>The Shop</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/damir/index.php">Home</a></li>
                <li><a href="http://localhost/damir/shop.php">Shop</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li style="float:right"><a href="http://localhost/damir/login.php">Login</a></li> 
                <li style="float:right"><a href="http://localhost/damir/registration.php">Register</a></li> 
            </ul>
        </nav>
    </header>

    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="favorites.php">Favorites</a></li>
                <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </aside>

        <main>

                <h1 style = "text-align: center;">THIS IS CHECKOUT</h1>

        </main>
    </div>

    <footer>
        <p>&copy; 2024 Online Shop. All rights reserved.</p>
    </footer>
    <script  src="./js/script.js"></script>
</body>
</html>
