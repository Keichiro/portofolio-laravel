<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('backs/money.png') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            border-bottom: 2px solid #ccc;
            transition: border-bottom-color 0.3s;
            outline: none;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-bottom-color: #007bff;
        }

        .login-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-container p {
            margin-top: 15px;
        }

        .login-container p a {
            color: #007bff;
            text-decoration: none;
        }

        .login-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Registration Page</h2>
        <form>
            <input type="text" id="inputField" placeholder="Enter phone number or email" required>
            <br>
            <p id="message"></p>
            <input type="text" placeholder="Username" required>
            <br>
            <input type="password" placeholder="Password" required>
            <br>
            <button type="submit">Sign in</button>
            <p>Already registered? <a href="/loginproj">Login to your account</a></p>
        </form>
    </div>
</body>
</html>

<script>
  const inputField = document.getElementById("inputField");
  const message = document.getElementById("message");

  inputField.addEventListener("input", () => {
    const value = inputField.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneRegex = /^\d{9,13}$/;

    if (emailRegex.test(value)) {
      message.textContent = "Email address is valid.";
      message.style.color = "green";
    } else if (phoneRegex.test(value)) {
      message.textContent = "Phone number is valid.";
      message.style.color = "green";
    } else {
      message.textContent = "Please enter a valid email address or phone number.";
      message.style.color = "red";
    }
  });
</script>