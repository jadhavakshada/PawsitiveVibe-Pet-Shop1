<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Online Pet Store</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
  <!-- Header Section -->
  <!-- <header>
    <img src="/registerlogo.png" alt="Pet Store Logo" class="logo">
    <nav>
      <a href="/">Home</a>
      <a href="/shop">Shop</a>
      <a href="/contact">Contact Us</a>
      <a href="/login" class="login-btn">Login</a>
    </nav>
  </header> -->

  <!-- Registration Form Section -->
  <div class="register-container">
    <form action="index.php" method="POST" id="registerForm">
      <h2 style="color:green;">Create Your Account</h2>
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" required>

      <label for="pet-preference">Pet Preferences:</label>
      <select id="pet-preference" name="pet_preference">
        <option value="dog">Dogs</option>
        <option value="cat">Cats</option>
        <option value="bird">Birds</option>
      </select>

      <button type="submit" class="submit-btn" style="background-color: green;">Join the Pack</button>
      <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
  </div>

  <footer>
    <p>Follow us on social media for tips and deals!</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
