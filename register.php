<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - Horizon Liquor</title>
<link rel="stylesheet" href="css/style-register.css">
</head>
<body>

<div class="register-page">
  <!-- Video Background -->
  <video class="register-video" autoplay muted loop playsinline>
    <source src="videos/register.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Transparent Form Container -->
  <div class="register-form">
    <h1>Register</h1>
    
    <!-- Success/Error messages -->
    <?php if(isset($success)) echo "<p class='success'>$success</p>"; ?>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

    <form action="" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
    
    <p style="margin-top: 15px; text-align:center; color:#ffd700;">
      Already have an account? <a href="login.php" style="color:#f5c518;">Login</a>
    </p>
  </div>
</div>

</body>
</html>