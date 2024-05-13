<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <header>
        <h1>Login</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/damir/index.php">Home</a></li>
                <li><a href="http://localhost/damir/shop.php">Shop</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li style="float:right"><a href="http://localhost/damir/registration.php">Register</a></li> <!-- Register button on top right -->
            </ul>
        </nav>
    </header>
    
    <section class="registration-form">
        <h2>Sign In</h2>
        <form action="signup.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="authUsername" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="authPassword" required>
            </div>
            <button name = "signin" type="submit" class="btn">Login</button>
        </form>
    </section>
    
    <footer>
        <p>&copy; 2024 Online Shop. All rights reserved.</p>
    </footer>
</body>
</html>
