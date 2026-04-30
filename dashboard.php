<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #2c92ff, #6dd5fa);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
            animation: fadeIn 0.8s ease;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            display: block;
            text-decoration: none;
            background: #2c92ff;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            transition: 0.3s;
            font-weight: bold;
        }

        .btn:hover {
            background: #1a7be0;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }

        .logout {
            background: #ff4d4d;
        }

        .logout:hover {
            background: #e60000;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>👋 Hiii Admin</h2>
        <p>Selamat datang di <b>Data Penjualan</b></p>

        <a href="crud.php" class="btn">📊 Data Penjualan</a>
        <a href="#" class="btn">📦 Data Product</a>
        <a href="tampilanproduk.php" class="btn">Tampilan Produk</a>
        <a href="kelompok.html"class="btn"> Foto Kelompok</a>
        <a href="logout.php" class="btn logout">🚪 Logout</a>
    </div>

</body>
</html>