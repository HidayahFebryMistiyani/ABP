<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff9966, #ff5e62);
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 25px;
            color: #333;
            font-weight: 600;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ff9966;
            border-radius: 8px;
            font-size: 16px;
        }
        input:focus {
            border-color: #ff5e62;
            outline: none;
        }
        button {
            background: linear-gradient(135deg, #ff5e62, #ff9966);
            border: none;
            color: white;
            padding: 12px 24px;
            margin-top: 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: linear-gradient(135deg, #ff9966, #ff5e62);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login User</h2>
        <form method="POST" action="proses_login.php">
            <input type="text" name="username" placeholder="Masukkan Username" required><br>
            <input type="password" name="password" placeholder="Masukkan Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
