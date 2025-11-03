<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mateo’s Pizza | Order Now</title>
		<link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <header>
    <h1>Order Your Pizza</h1>
  </header>
      <!-- Pizza logo image -->
       <a href="index.php">
        <img src="images/pizza logo.png" alt="Mateo’s Pizza Logo" class="logo" width="100" height="100">
      </a>      <!-- set the form to post to confirmation.php -->
      <form action="confirmation.php" method="post">
        <!--the links to go to each page-->
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Menu.php">Menu</a></li>
                <li><a href="Order.php">Order Form</a></li>
                <li><a href="Contact.php">Contact</a></li>
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

        <label>Meat Options:</label>
        <div>
          <input type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni" /> <label for="pepperoni">Pepperoni</label><br>
          <input type="checkbox" id="Sausage" name="toppings[]" value="Sausage" /> <label for="Sausage">Sausage</label><br>
          <input type="checkbox" id="Chicken" name="toppings[]" value="Chicken" /> <label for="Chicken">Chicken</label><br>
          <input type="checkbox" id="bacon" name="toppings[]" value="bacon" /> <label for="bacon">Ham</label><br>
          <input type="checkbox" id="Anchovies" name="toppings[]" value="Anchovies" /> <label for="Anchovies">Anchovies</label><br>
          <input type="checkbox" id="Beef" name="toppings[]" value="Beef" /> <label for="Beef">Beef</label><br>

        </div>
        <label>Veggies Options:</label>
        <div>
        <div>
            <input type="checkbox" id="mushrooms" name="toppings[]" value="Mushrooms">
            <label for="mushrooms">Mushrooms</label><br>

            <!-- Onions with color choice -->
            <input type="checkbox" id="onions-red" name="toppings[]" value="Red Onions">
            <label for="onions-red">Onions (Red)</label><br>
            <input type="checkbox" id="onions-yellow" name="toppings[]" value="Yellow Onions">
            <label for="onions-yellow">Onions (Yellow)</label><br>

            <!-- Olives -->
            <input type="checkbox" id="olives-black" name="toppings[]" value="Black Olives">
            <label for="olives-black">Olives (Black)</label><br>
            <input type="checkbox" id="olives-green" name="toppings[]" value="Green Olives">
            <label for="olives-green">Olives (Green)</label><br>

            <!-- Bell peppers -->
            <input type="checkbox" id="bell-green" name="toppings[]" value="Green Bell Peppers">
            <label for="bell-green">Bell Peppers (Green)</label><br>
            <input type="checkbox" id="bell-red" name="toppings[]" value="Red Bell Peppers">
            <label for="bell-red">Bell Peppers (Red)</label><br>

            <!-- Tomatoes -->
            <input type="checkbox" id="tomatoes-sliced" name="toppings[]" value="Sliced Tomatoes">
            <label for="tomatoes-sliced">Tomatoes (Sliced)</label><br>
            <input type="checkbox" id="tomatoes-cherry" name="toppings[]" value="Cherry Tomatoes">
            <label for="tomatoes-cherry">Tomatoes (Cherry)</label><br>

            <!-- Other veggies -->
            <input type="checkbox" id="spinach" name="toppings[]" value="Spinach">
            <label for="spinach">Spinach</label><br>

            <input type="checkbox" id="garlic-fresh" name="toppings[]" value="Fresh Garlic">
            <label for="garlic-fresh">Garlic (Fresh)</label><br>
            <input type="checkbox" id="garlic-roasted" name="toppings[]" value="Roasted Garlic">
            <label for="garlic-roasted">Garlic (Roasted)</label><br>

            <input type="checkbox" id="pineapple" name="toppings[]" value="Pineapple">
            <label for="pineapple">Pineapple</label><br>

            <input type="checkbox" id="jalapenos" name="toppings[]" value="Jalapeños">
            <label for="jalapenos">Jalapeños</label>
          </div>


        <label for="special">Special Instructions:</label>
        <textarea id="special" name="special" rows="3" placeholder="Example: no onions, extra cheese..."></textarea>
      </fieldset>

    <!-- ORDER TYPE -->
      <fieldset>
        <legend>Order Type</legend>

        <input type="radio" id="takeout" name="order-type" value="takeout" checked />
        <label for="takeout">Take-out</label>

        <input type="radio" id="delivery" name="order-type" value="delivery" />
        <label for="delivery">Delivery</label>

        <input type="radio" id="eat-in" name="order-type" value="eat-in" />
        <label for="eat-in">Eat-in</label>
      </fieldset>

      <!-- SUBMIT/RESET BUTTONS -->
      <div style="text-align:center; margin-top: 2rem;">
        <button type="submit">Submit Order</button>
        <button type="reset">Reset</button>
      </div>
    </form>


    <p style="margin-top:2rem;">
      Need help deciding? Check out our <a href="menu.html">Menu</a> for inspiration!
    </p>
  </main>

  <!-- FOOTER -->
    <footer>
    <p>&copy; 2025 Mateo’s Pizza Co. | Built with ❤️ and HTML</p>
  </footer>
</body>
</html>
