<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $pet_preference = $_POST['pet_preference'];

  // Insert data into the database
  $sql = "INSERT INTO `users` (name, email, password, pet_preference) VALUES ('$name', '$email', '$password', '$pet_preference')";

  if (mysqli_query($conn, $sql)) {
    //echo "Registration successful!";
    header("Location:Login.php");
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}
?>
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
  <header>
    <!-- <img src="/registerlogo.png" alt="Pet Store Logo" class="logo">
    <nav>
      <a href="/">Home</a>
      <a href="/shop">Shop</a>
      <a href="/contact">Contact Us</a>
      <a href="/login" class="login-btn">Login</a>
    </nav> -->
  </header>

  <!-- Registration Form Section -->
  <div class="register-container">
    <form action="register1.php" method="POST" id="registerForm">
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
        
      </select>

      <button type="submit" class="submit-btn" style="background-color:green;">Join a Pack</button>
      <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
  </div>

  <footer>
    <p>Follow us on social media for tips and deals!</p>
  </footer>

  <script src="script.js" ></script>
</body>
</html>

