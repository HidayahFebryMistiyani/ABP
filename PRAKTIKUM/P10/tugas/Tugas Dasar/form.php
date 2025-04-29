<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Nama & Umur</title>
    <!-- Import Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5af19, #f12711);
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 25px;
            color: #333;
            font-weight: 600;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #f5af19;
            border-radius: 8px;
            font-size: 16px;
        }
        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #f12711;
            outline: none;
        }
        button {
            background: linear-gradient(135deg, #f12711, #f5af19);
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
            background: linear-gradient(135deg, #f5af19, #f12711);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Input Data</h2>
        <form method="POST" action="proses.php">
            <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
            <input type="number" name="umur" placeholder="Masukkan Umur Anda" required>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
