<!-- navbar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #0a0a23; /* Navy background */
      color: white;
    }

    /* Navbar container */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      background-color: rgba(10, 10, 35, 0.9);
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 6px rgba(0,0,0,0.6);
    }

    /* Logo section */
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      height: 70px;
    }

    .logo span {
      font-size: 24px;
      font-weight: bold;
      color: #FFD700;
    }

    /* Menu links */
    .menu {
      display: flex;
      gap: 30px;
    }

    .menu a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      transition: color 0.3s, text-shadow 0.3s;
    }

    .menu a:hover {
      color: #FFD700;
      text-shadow: 0 0 6px #FFD700;
    }

    /* Hamburger button (hidden by default) */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
    }

    .hamburger div {
      width: 25px;
      height: 3px;
      background: white;
      transition: 0.3s;
    }

    /* Mobile view */
    @media (max-width: 768px) {
      .menu {
        display: none; /* Hide menu initially */
        position: absolute;
        top: 70px;
        right: 0;
        background: rgba(10, 10, 35, 0.95);
        flex-direction: column;
        width: 200px;
        padding: 20px;
        gap: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.7);
      }

      .menu.active {
        display: flex; /* Show menu when active */
      }

      .hamburger {
        display: flex; /* Show hamburger */
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <!-- Logo -->
    <div class="logo">
      <img src="images/logo.jpg" alt="Horizon Liquor Shop Logo">
      <span>Horizon Liquor</span>
    </div>

    <!-- Menu -->
    <div class="menu" id="menu">
      <a href="index.php">Home</a>
      <a href="shop.php">Shop</a>
      <a href="custom.php">Custom Orders</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="login.php">Login</a>
    </div>

    <!-- Hamburger -->
    <div class="hamburger" id="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </nav>

  <script>
    // Toggle menu on click
    const hamburger = document.getElementById('hamburger');
    const menu = document.getElementById('menu');

    hamburger.addEventListener('click', () => {
      menu.classList.toggle('active');
    });
  </script>
</body>
</html>
