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
    background-color: #0a0a23;
    color: white;
  }

  /* Navbar container */
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background: rgba(10,10,35,0.95);
    position: fixed;
    top: 0;
    width: 95%;
    z-index: 1000;
    box-shadow: 0 2px 6px rgba(0,0,0,0.6);
  }

  /* Logo left */
  .logo {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-shrink: 0;
  }
  .logo img {
    height: 50px;
    max-width: 100px;
  }
  .logo span {
    font-size: 22px;
    font-weight: bold;
    color: #FFD700;
    white-space: nowrap;
  }

  /* Nav right (menu + hamburger) */
  .nav-right {
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
    flex-wrap: wrap;      /* allow wrapping on smaller screens */
  }

  .menu {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;      /* wrap if screen is too narrow */
    flex-shrink: 1;       /* allow menu to shrink */
  }

  .menu a {
    text-decoration: none;
    color: white;
    font-size: 16px;
    white-space: nowrap;
  }

  .menu a:hover {
    color: #FFD700;
    text-shadow: 0 0 6px #FFD700;
  }

  /* Hamburger */
  .hamburger {
    display: none;
    flex-direction: column;
    gap: 5px;
    cursor: pointer;
    padding: 5px;
    margin-left:20px;
    z-index: 2000;
  }
  .hamburger div {
    width: 30px;
    height: 3px;
    background: #FFD700;
    border-radius: 2px;
    transition: 0.3s;
  }

  /* Hamburger animation */
  .hamburger.active div:nth-child(1) {
    transform: rotate(45deg) translate(5px,5px);
  }
  .hamburger.active div:nth-child(2) {
    opacity: 0;
  }
  .hamburger.active div:nth-child(3) {
    transform: rotate(-45deg) translate(5px,-5px);
  }

  /* MOBILE + small desktop */
  @media (max-width: 768px) {
    .menu {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 100%; /* below hamburger */
      right: 0;
      background: rgba(10,10,35,0.95);
      width: 200px;
      padding: 10px;
      gap: 10px;
      border-radius: 6px;
    }
    .menu.active {
      display: flex;
    }

    .hamburger {
      display: flex;
    }

    /* shrink logo on smaller screens */
    .logo img {
      height: 40px;
      max-width: 80px;
    }
    .logo span {
      font-size: 18px;
    }

    .navbar {
      padding: 10px 15px;
    }

    .menu a {
      font-size: 14px;
    }
  }

  /* Adjust menu on mid-size desktops */
  @media (max-width: 1200px) {
    .menu a {
      font-size: 15px; /* slightly smaller */
    }
    .navbar {
      padding: 10px 15px;
    }
  }
</style>
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