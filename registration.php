<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <header>
        <h1>Registration</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/damir/index.php">Home</a></li>
                <li><a href="http://localhost/damir/shop.php">Shop</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li style="float:right"><a href="http://localhost/damir/login.php">Login</a></li> <!-- Login button on top right -->
            </ul>
        </nav>
    </header>
    
    <section class="registration-form">
        <h2>Create an Account</h2>
        <form id = "registration" action="signup.php" method="post" name = "myForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="regUsername" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="regPassword" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" required>
            </div>
            <button name = "signup" type="submit" class="btn">Register</button>
        </form>
    </section>
    
    <footer>
        <p>&copy; 2024 Online Shop. All rights reserved.</p>
    </footer>
    <script  src="./js/script.js"></script>
</body>
</html>
