<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Burger Paradise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contact-info">
            <h2>Contact Information</h2>
            <address>
                <p><strong>Address:</strong> 123 Burger Street, Cityville</p>
                <p><strong>Email:</strong> info@burgerparadise.com</p>
                <p><strong>Phone:</strong> +1 (555) 123-4567</p>
            </address>
        </section>
        <section class="contact-form">
            <h2>Contact Form</h2>
            <form method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit" class="btn">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Burger Paradise</p>
    </footer>
</body>
</html>
