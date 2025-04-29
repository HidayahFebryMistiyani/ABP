<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $status = ($umur >= 18) ? "Dewasa" : "Belum Dewasa";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input</title>
    <!-- Import Google Fonts: Poppins -->
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
        .result-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        .status {
            margin-top: 15px;
            font-size: 22px;
            font-weight: bold;
            color: <?php echo ($umur >= 18) ? '#4CAF50' : '#FF5722'; ?>;
        }
        a {
            display: inline-block;
            margin-top: 20px;
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
    <div class="result-container">
        <h2>Hasil Input Data</h2>
        <p>Nama: <strong><?php echo htmlspecialchars($nama); ?></strong></p>
        <p>Umur: <strong><?php echo htmlspecialchars($umur); ?></strong></p>
        <p class="status">Status: <?php echo $status; ?></p>
        <a href="form.php">Kembali</a>
    </div>
</body>
</html>
