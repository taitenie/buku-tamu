<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dindik Jatim - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #00218D, #3a5ec7);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 15px;
            width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .login-container h2 {
            text-align: center;
            color: #FEEC77;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #FEEC77;
            color: #00218D;
            font-size: 16px;
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
        }

        .password-container {
            display: flex;
            align-items: center;
        }

        .password-container input {
            flex: 1;
        }

        .password-container img {
            cursor: pointer;
            margin-left: 10px;
        }

        .signup-btn {
            text-align: center;
            margin-top: 15px;
        }

        .signup-btn a {
            color: #FEEC77;
            font-weight: bold;
            text-decoration: none;
        }

        .signup-btn a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Form Login -->
    <div class="login-container">
        <h2>Sign In</h2>
        <form action="home.blade.php" method="POST"> <!-- Fix action link -->
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group password-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <img src="https://img.icons8.com/ios/452/visible.png" id="toggle-password" alt="Show password" width="20">
            </div>
            <input type="submit" value="Sign In">
            <div class="signup-btn">
                <p>Don't have an account? <a href="signup.blade.php" id="sign-up-btn">Sign Up</a></p> <!-- Fix the link -->
            </div>
        </form>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById("toggle-password");
        const passwordField = document.getElementById("password");

        togglePassword.addEventListener("click", function () {
            // Toggle the password field type between text and password
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;

            // Toggle the eye icon
            const icon = passwordField.type === "password" ? "visible.png" : "invisible.png";
            togglePassword.src = https://img.icons8.com/ios/452/${icon};
        });
    </script>
</body>

</html>