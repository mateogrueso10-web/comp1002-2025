<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Mat’s Pizza</title>
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <header>
    <a href="index.php">
      <img src="images/pizza logo.png" alt="Mateo’s Pizza Logo" class="logo" width="100" height="100">
    </a>
    <h1>Contact Us</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Menu.php">Menu</a></li>
        <li><a href="Order.php">Order Form</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main class="contact-container">
    <div class="contact-box">
      <h2>We’d Love to Hear From You!</h2>
      <p>Have a question, feedback, or want to tell us how much you love our pizza? Fill out the form below — we’ll get back to you soon!</p>

      <form action="confirmation.php" method="post" class="contact-form">
        <label for="name"><strong>Name:</strong></label>
        <input type="text" id="name" name="name" required>

        <label for="email"><strong>Email:</strong></label>
        <input type="email" id="email" name="email" required>

        <label for="phone"><strong>Phone:</strong></label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890">

        <label for="message"><strong>Message:</strong></label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <div class="form-buttons">
          <input type="submit" value="Send Message" class="btn-submit">
          <input type="reset" value="Clear" class="btn-reset">
        </div>
      </form>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Mat’s Pizza | Fresh from our oven to your table 🍕</p>
  </footer>
</body>
</html>
