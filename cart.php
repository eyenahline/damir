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
            <section class="products">
                <?php
                    $host = "localhost";
                    $user = "eyenahline";
                    $pass = "asdf1234";
                    $dbnm = "shop";
                    $connect = mysqli_connect($host, $user, $pass, $dbnm);

                    $sel = mysqli_query($connect, "SELECT * FROM cart INNER JOIN items ON cart.itemid = items.itemid WHERE cart.login = '".$_SESSION['login']."';"); 
                    while($data = mysqli_fetch_array($sel)){
                        echo '<div>';
                        echo '<img src = "'.$data['photo'].'"alt = "'.$data['name'].'">';
                        echo '<h3>'.$data['name'].' x '.$data['amount'].'</h3>';
                        echo '<button onclick = "deleteFromCart('.$data['itemid'].')" class="add-to-favorites">🗑️</button>';
                        echo '</div>';
                    }
                ?>
                <a href = "checkout.php" style = "display: block; width: 50%; padding: 10px; background-color: #333; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" href="checkout.php" class="btn">Checkout</a>
            </section>
        </main>
    </div>

    <footer>
        <p>&copy; 2024 Online Shop. All rights reserved.</p>
    </footer>
    <script  src="./js/script.js"></script>
</body>
</html>
