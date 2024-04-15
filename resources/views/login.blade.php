<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-color: #d3d3d3;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
			background-image: url('{{ asset('backs/background.gif') }}');
			background-size: cover;
        }

        .login-box {
            background-color: #8b0000;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: #fff;
            text-align: center;
            width: 350px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .login-box button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 7px;
            padding: 10px 25px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #45a049;
        }

        .login-box a {
            color: #fff;
            text-decoration: none;
        }

        .login-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login page</h2>
        <form>
            <input type="text" placeholder="email">
            <br>
            <input type="password" placeholder="password">
            <br>
            <button>Sign in</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</body>
</html>
