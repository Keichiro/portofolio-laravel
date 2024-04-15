<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Training</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .containers {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        width: 100%;
        }

        .item {
        flex: 1;
        }
        /* Header Styles */
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        header p {
            font-size: 1.2em;
        }
        /* Navigation Styles */
        nav {
            background: #444;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        nav a:hover {
            background: #555;
        }
        /* Hero Section Styles */
        .hero {
            background: url('{{ asset('backs/money.png') }}') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }
        .hero h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        /* Features Section Styles */
        .features {
    display: flex;
    justify-content: space-around;
    align-items: flex-end; /* Change align-items to center */
    flex-wrap: wrap;
    margin-top: 40px;
    
}

.feature {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    flex: 1 1 300px;
    margin: 10px;
    text-align: center;
    transition: transform 0.3s ease;
}

.feature i {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #007bff;
}

.feature h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.feature p {
    font-size: 1.1em;
}

.feature:hover {
    transform: translateY(-5px);
}

        /* Footer Styles */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Money Training</h1>
            <p>Learn Financial Management Skills</p>
        </div>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Courses</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
    <section class="hero">
        <div class="container">
            <h2>Welcome to Money Training</h2>
            <p>Take control of your finances and build a secure future.</p>
            <a href="#" class="btn">Get Started</a>
        </div>
    </section>
    <section class="features">
        <div class="container">
        <section class="features">
    <div class="containers">
        <div class="feature">
            <i class="fas fa-credit-card"></i>
            <h3>Financial Planning</h3>
            <p>Learn how to create a budget, save money, and plan for the future.</p>
        </div>
        <div class="feature">
            <i class="fas fa-chart-line"></i>
            <h3>Investment Strategies</h3>
            <p>Explore various investment options and strategies to grow your wealth.</p>
        </div>
        <div class="feature">
            <i class="fas fa-money-bill-alt"></i>
            <h3>Debt Management</h3>
            <p>Get tips on managing debt effectively and becoming debt-free.</p>
        </div>
    </div>
</section>

    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Kelompok 4. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
