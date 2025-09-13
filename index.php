<?php require "navbar.php";
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horizon Liquor Production Company</title>
  <link rel="stylesheet" href="css/style-index.css">
</head>
<body>

  <!-- Hero Section -->
  <section class="hero">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="videos/golden-wine.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="hero-overlay">
      <div class="hero-text-box">
        <h1>Horizon Liquor — Taste. Explore. Order.</h1>
        <p>Custom drinks, smart recommendations, fast delivery.</p>
        <small>Discover your next favorite drink with our smart recommendations.</small>
        <div class="hero-buttons">
          <a href="shop.php" class="cta-btn">Explore Now</a>
          <a href="register.php" class="cta-btn">Register</a>
        </div>
      </div>

      <!-- Chatbot  -->
      <div class="chatbot">
    <img src="images/chatbox.png" alt="Chatbot" class="chatbot-icon">
    <span class="chat-label">Ask me your queries!</span>
  </div>
    </div>
    
  <!-- Scroll Down Arrow -->
  <a href="#features" class="scroll-down-features">&#8595;</a>
  </section>

  <!-- <div class="chatbot">
    <img src="images/chatbox.png" alt="Chatbot" class="chatbot-icon">
    <span class="chat-label">Ask me your queries!</span>
  </div> -->


  <!-- Features Section -->
  <section class="features" id="features">
    <h1>Features</h1>
    <div class="feature-card">
      <span class="icon">🍷</span>
      <h3>Premium Quality</h3>
      <p>Crafted with care, our drinks deliver unmatched taste and consistency.</p>
    </div>
    <div class="feature-card">
      <span class="icon">🚚</span>
      <h3>Fast Delivery</h3>
      <p>From our cellar to your door — quick, reliable, and safe.</p>
    </div>
    <div class="feature-card">
      <span class="icon">🤖</span>
      <h3>AI Recommendations</h3>
      <p>Personalized drink suggestions tailored just for you.</p>
    </div>
    <div class="feature-card">
      <span class="icon">🍸</span>
      <h3>Custom Orders</h3>
      <p>Create your own blends and enjoy drinks made your way.</p>
    </div>
    <!-- Scroll Down Arrow -->
   <div class="arrow-container">
      <a href="#popular-drinks" class="scroll-down-populardrinks">&#8595;</a>
    </div>

  </section>

  <!-- Popular Drinks Section -->
<section class="popular-drinks" id="popular-drinks">
  <h1>Popular Drinks</h1>
  <div class="drink-cards">
    <?php
    // Fetch 4 popular drinks
    $stmt = $pdo->prepare("SELECT * FROM products WHERE is_popular = 1");
    $stmt->execute();
    $popularDrinks = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($popularDrinks as $drink){
        echo '<div class="drink-card">';
        echo '<img src="'.$drink['image'].'" alt="'.$drink['name'].'">';
        echo '<h3>'.$drink['name'].'</h3>';
        echo '<p>'.$drink['description'].'</p>';
        echo '<p class="price">NPR '.$drink['price'].'</p>';
        echo '<a href="shop.php" class="cta-btn">Buy Now</a>';
        echo '</div>';
    }
    ?>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="footer-content">
    <div class="legal">
      <a href="terms.php">Terms & Conditions</a>
      <a href="privacy.php">Privacy Policy</a>
    </div>
  </div>
  <div class="footer-bottom">
    &copy; 2025 Horizon Liquor. All rights reserved.
  </div>
</footer>



</body>
</html>
