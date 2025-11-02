<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mateo’s Pizza | Order Now</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <header>
    <h1>Order Your Pizza</h1>
  </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Menu.php">Menu</a></li>
                <li><a href="Order.php">Order Form</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
 <main>
    <h2>Customize Your Perfect Pizza!</h2>
    <p>Fill out the form below to build your dream pizza. We’ll get it ready fresh and fast!</p>

    <form action="confirmation.php" method="post">
    <!-- CUSTOMER INFO -->
      <fieldset>
        <legend>Customer Information</legend>

        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required />

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="123-456-7890" required />

        <label for="address">Delivery Address:</label>
        <textarea id="address" name="address" rows="3" placeholder="Enter your full address here..."></textarea>

        <label for="delivery-date">Preferred Delivery Date:</label>
        <input type="date" id="delivery-date" name="delivery-date" />
      </fieldset>

      <!-- PIZZA DETAILS -->
      <fieldset>
        <legend>Pizza Details</legend>

        <label for="num-pizzas">Number of Pizzas:</label>
        <input type="number" id="num-pizzas" name="num-pizzas" min="1" max="10" value="1" />

        <label for="size">Pizza Size:</label>
        <select id="size" name="size">
          <option value="small">Small (6 slices)</option>
          <option value="medium">Medium (8 slices)</option>
          <option value="large">Large (12 slices)</option>
        </select>

        <label>Pizza Shape:</label>
        <input type="radio" id="round" name="shape" value="round" checked />
        <label for="round">Round</label>
        <input type="radio" id="square" name="shape" value="square" />
        <label for="square">Square</label>

        <label>Crust Type:</label>
        <input type="radio" id="thin" name="crust" value="thin" checked />
        <label for="thin">Thin Crust</label>
        <input type="radio" id="NY" name="crust" value="NY" checked />
        <label for="thin">New York Style</label>
        <input type="radio" id="deep" name="crust" value="deep" />
        <label for="deep">Deep Dish</label>
        <input type="radio" id="stuffed" name="crust" value="stuffed" />
        <label for="stuffed">Stuffed Crust</label>
        <input type="radio" id="Cauliflower" name="crust" value="Cauliflower" />
        <label for="stuffed">Cauliflower Crust (Gluten Free)</label>

        <label>Toppings:</label>
        <div>
          <input type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni" /> <label for="pepperoni">Pepperoni</label><br>
          <input type="checkbox" id="mushrooms" name="toppings[]" value="mushrooms" /> <label for="mushrooms">Mushrooms</label><br>
          <input type="checkbox" id="onions" name="toppings[]" value="onions" /> <label for="onions">Onions</label><br>
          <input type="checkbox" id="bacon" name="toppings[]" value="bacon" /> <label for="bacon">Bacon</label><br>
          <input type="checkbox" id="pineapple" name="toppings[]" value="pineapple" /> <label for="pineapple">Pineapple</label>
        </div>

        <label for="special">Special Instructions:</label>
        <textarea id="special" name="special" rows="3" placeholder="Example: no onions, extra cheese..."></textarea>
      </fieldset>

      <!-- SUBMIT/RESET BUTTONS -->
      <div style="text-align:center; margin-top: 2rem;">
        <button type="submit">Submit Order</button>
        <button type="reset">Reset</button>
      </div>
    </form>
