<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dashboard-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 400px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(135deg, #0072ff, #00c6ff);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
        }
        a:hover {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Ini adalah halaman dashboard Anda.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
