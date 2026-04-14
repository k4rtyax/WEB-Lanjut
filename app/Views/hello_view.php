<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halo CodeIgniter 4!</title>
    <meta name="description" content="Halaman sambutan pertama saya di CodeIgniter 4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <style>
        :root {
            --primary: #ee4323;
            --dark: #202020;
            --light: #f8f9fa;
        }
        body {
            background-color: var(--dark);
            color: var(--light);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: fadeIn 1.5s ease-out;
        }
        h1 {
            font-size: 3.5rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, #ee4323, #ff8c00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p {
            font-size: 1.2rem;
            color: #ccc;
        }
        .btn {
            display: inline-block;
            margin-top: 2rem;
            padding: 10px 25px;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(238, 67, 35, 0.4);
            background-color: #ff5722;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container" id="welcome-box">
        <h1>Halo Dunia!</h1>
        <p>Selamat datang di aplikasi CodeIgniter 4 pertama Anda.</p>
        <p>Direktori ini sudah siap untuk dikembangkan.</p>
        <a href="https://codeigniter.com/user_guide/" target="_blank" class="btn">Baca Dokumentasi</a>
    </div>
</body>
</html>
