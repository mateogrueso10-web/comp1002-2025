<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Confirmation - Mateo’s Pizza</title>
  <link href="css/styles.css" rel="stylesheet" />
  <!--Icon setting-->
  <link rel="icon" type="image/png" href="images/pizza logo.png">
</head>
<body>

  <header>
    <!-- Pizza logo image -->
    <a href="index.html">
      <img src="images/pizza logo.png" alt="Mateo’s Pizza Logo" class="logo" width="100" height="100">
    </a>
    <h1>Mateo’s Pizza</h1>
    <p>Thank you for your order!</p>
  </header>

  <main>
    <h2>Order Confirmation</h2>
    <p>We’ve received your pizza order. Here are your details:</p>

    <section>
      <h3>🍕 Order Summary</h3>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form inputs safely
        $name = htmlspecialchars($_POST['name'] ?? 'N/A');
        $email = htmlspecialchars($_POST['email'] ?? 'N/A');
        $phone = htmlspecialchars($_POST['phone'] ?? 'N/A');
        $numPizzas = htmlspecialchars($_POST['num-pizzas'] ?? 'N/A');
        $size = htmlspecialchars($_POST['size'] ?? 'N/A');
        $shape = htmlspecialchars($_POST['shape'] ?? 'N/A');
        $crust = htmlspecialchars($_POST['crust'] ?? 'N/A');
        $delivery = htmlspecialchars($_POST['order-type'] ?? 'N/A');
        $notes = htmlspecialchars($_POST['notes'] ?? '');
        $toppings = $_POST['toppings'] ?? [];
      ?>

      <ul>
        <li><strong>Name:</strong> <?= $name ?></li>
        <li><strong>Email:</strong> <?= $email ?></li>
        <li><strong>Phone:</strong> <?= $phone ?></li>
        <li><strong>Number of Pizzas:</strong> <?= $numPizzas ?></li>
        <li><strong>Size:</strong> <?= $size ?></li>
        <li><strong>Shape:</strong> <?= $shape ?></li>
        <li><strong>Crust:</strong> <?= $crust ?></li>
        <li><strong>Order Type:</strong> <?= $delivery ?></li>
        <li><strong>Toppings:</strong>
          <?php
            if (!empty($toppings)) {
              echo implode(", ", array_map('htmlspecialchars', $toppings));
            } else {
              echo "None selected";
            }
          ?>
        </li>
        <li><strong>Special Instructions:</strong> <?= nl2br($notes) ?></li>
      </ul>

      <p style="margin-top: 1.5rem;">We’ll start preparing your pizza right away 🍽️</p>

      <?php
      } else {
        echo "<p>No order data received. Please return to the <a href='order.html'>order page</a>.</p>";
      }
      ?>
    </section>

    <div style="text-align:center; margin-top: 2rem;">
      <a href="index.html"><button>Back to Home</button></a>
      <a href="Order.html"><button>Place Another Order</button></a>
    </div>
  </main>

  <footer>
    <p>&copy; <?= date("Y") ?> Mateo’s Pizza — Fresh, Fast, & Delicious!</p>
  </footer>

</body>
</html>
