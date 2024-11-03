<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Online Pet Store</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <!-- Header Section -->
  <header>
    
  </header>

  <!-- Login Form Section -->
  <div class="login-container">
    <form action="login1.php" method="POST" id="loginForm">
      <h2 style="color: green;">Sign In to Your Account</h2>
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" class="login-btn" style="background-color: green;">Sign in</button>
      <p>New to our store? <a href="register.php">Create an account</a></p>
    </form>
  </div>

  <footer>
    <!-- <p>Follow us for pet tips and deals!</p> -->
  </footer>

  <script src="login-script.js"></script>
</body>
</html>
