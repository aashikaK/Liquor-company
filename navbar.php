<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<title>Navbar</title>

</head>
<body>
  <nav class="navbar">
    <!-- LEFT: Logo -->
    <div class="logo">
      <img src="images/logo.jpg" alt="Horizon Liquor">
      <span>Horizon Liquor</span>
    </div>

    <!-- RIGHT: Menu + Hamburger -->
    <div class="nav-right">
      <div class="menu" id="menu">
        <a href="index.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="custom.php">Custom Orders</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
      </div>

      <div class="hamburger" id="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </nav>

<script>
  const hamburger = document.getElementById('hamburger');
  const menu = document.getElementById('menu');

  hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
    hamburger.classList.toggle('active'); // animate X
  });
</script>
</body>
</html>