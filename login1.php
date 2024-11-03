<?php
include 'db.php';  // Include database connection file
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare SQL to prevent SQL injection
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if user exists
  if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Debugging output
    // echo "<p>Database hash: " . htmlspecialchars($user['password']) . "</p>";
    // echo "<p>Entered password: " . htmlspecialchars($password) . "</p>";

    // Verify entered password with hashed password in the database
    //if (htmlspecialchars($password)==htmlspecialchars($user['password'])) 
    if (password_verify($password, $user['password'])){
      // If password matches, start session and redirect user
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['name'] = $user['name'];
      header("Location: index.html");  // Redirect to a home page or dashboard
      exit();
    } else {
      // Debugging output for failed verification
      echo "<p style='color: red; text-align: center;'>Password is incorrect</p>";
      //echo "<p>Database hash: " . htmlspecialchars($user['password']) . "</p>";
      echo '<!DOCTYPE html>
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
      <h2>Sign In to Your Account</h2>
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" class="login-btn">Sign in</button>
      <p>New to our store? <a href="register.php">Create an account</a></p>
    </form>
  </div>

  <footer>
    <!-- <p>Follow us for pet tips and deals!</p> -->
  </footer>

  <script src="login-script.js"></script>
</body>
</html>
';
    }
  } else {
    // If no user is found with that email
    echo "<p style='color: red; text-align: center;'>No account found with that email.</p>";
    echo '<!DOCTYPE html>
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
      <h2>Sign In to Your Account</h2>
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" class="login-btn">Sign in</button>
      <p>New to our store? <a href="register.php">Create an account</a></p>
    </form>
  </div>

  <footer>
    <!-- <p>Follow us for pet tips and deals!</p> -->
  </footer>

  <script src="login-script.js"></script>
</body>
</html>
';
  }

  $stmt->close();
  $conn->close();
}
?>
