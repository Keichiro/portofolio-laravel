<!DOCTYPE html>
<html>
<head>
    <title>Windows Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        nav {
            background-color: #ccc;
            color: #333;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            display: inline-block;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline-block;
            margin: 0 10px;
        }

        nav a {
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            color: #333;
        }

        nav a:hover {
            background-color: #eee;
        }

        main {
            padding: 20px;
        }

        main h2 {
            font-size: 24px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        main p {
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            padding: 0;
        }

        .button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .button:hover {
            background-color: #666;
        }

        .hero-section {
            background-image: url('hero-image.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            font-size: 36px;
        }

        .features-section {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .feature {
            text-align: center;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
        }

        .feature img {
            width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Windows Home</h1>
</header>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Support</a></li>
    </ul>
</nav>

<main>
    <section class="hero-section">
        <h2>Welcome to Windows</h2>
    </section>

    <section class="features-section">
        <div class="feature">
            <img src="feature1.png" alt="Feature 1">
            <h3>Feature 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
            <a href="#" class="button">Learn More</a>
        </div>
        <div class="feature">
            <img src="feature2.png" alt="Feature 2">
            <h3>Feature 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
            <a href="#" class="button">Learn More</a>
        </div>
        <div class="feature">
            <img src="feature3.png" alt="Feature 3">
            <h3>Feature 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
            <a href="#" class="button">Learn More</a>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2023 Microsoft Windows</p>
</footer>

</body>
</html>
