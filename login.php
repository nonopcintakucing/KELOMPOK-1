<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 320px;
        }
        .login-box h2 { text-align: center; margin-bottom: 20px; color: #333; }
        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: #2c92ff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .login-box button:hover { background-color: #2c92ff; }
        .message {
            text-align: center;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            font-size: 14px;
        }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login</h2>

        <?php
        // Data demo
        $user_demo = "admin";
        $pass_demo = "admin123";
        $message = "";
        $type = "";

        // Cek jika form dikirim
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $input_user = $_POST["username"] ?? "";
            $input_pass = $_POST["password"] ?? "";

            if ($input_user === $user_demo && $input_pass === $pass_demo) {
                $message = "✅ Login berhasil! Selamat datang, " . htmlspecialchars($input_user) . ".";
                $type = "success";
            } else {
                $message = "❌ Username atau password salah!";
                $type = "error";
            }
        }

        // Tampilkan pesan jika ada
        if ($message !== ""): ?>
            <p class="message <?php echo $type; ?>"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>

</body>
</html>