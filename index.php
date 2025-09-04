<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Liquor Company</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #4a2c2a;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #3b1f1f;
            padding: 10px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 5px 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 50px 20px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #4a2c2a;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #6b3f3d;
        }
        footer {
            background-color: #3b1f1f;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            main {
                padding: 30px 10px;
            }
            nav {
                flex-direction: column;
                align-items: center;
            }
            nav a {
                margin: 10px 0;
            }
            .btn {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
            main h2 {
                font-size: 1.2em;
            }
            main p {
                font-size: 0.95em;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Horizon Liquor Company</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="products.php">Products</a>
</nav>

<main>
    <h2>Your one-stop solution for liquor customization</h2>
    <p>Small shops can now place orders, customize formulas, and get delivery estimates easily.</p>
    <a class="btn" href="register.php">Get Started</a>
    <a class="btn" href="products.php">View Products</a>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> Horizon Liquor Company. All Rights Reserved.
</footer>

</body>
</html>
