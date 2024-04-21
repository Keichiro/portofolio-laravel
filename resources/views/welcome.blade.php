<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Portfolio Welcome</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
            overflow: hidden;
        }
        .welcome-container {
            text-align: center;
            padding: 20px;
            max-width: 700px;
            width: 100%;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 0;
        }
        p {
            font-size: 1.5rem;
            color: #666;
            margin-top: 5px;
        }
        .next-button a {
            display: inline-block;
            padding: 15px 30px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.2s ease-in-out;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .next-button a:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        /* Animation */
        @keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0);
                opacity: 0;
            }
            to {
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }
        .welcome-container {
            animation: fadeInUp 1.5s ease-in-out forwards;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to My Portfolio</h1>
        <p>Discover my projects and journey.</p>
        <div class="next-button">
            <a href="/portofolio">Next</a>
        </div>
    </div>
</body>
</html>
