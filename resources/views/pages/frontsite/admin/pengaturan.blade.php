<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .sidebar {
            width: 20%;
            background-color: #f0f4ff;
            padding: 20px;
            text-align: center;
        }

        .sidebar h2 {
            color: #ff6f00;
            margin-bottom: 50px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 20px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
        }

        .sidebar ul li.active a {
            color: #ff6f00;
        }

        .content {
            width: 80%;
            padding: 50px;
            background-color: #fff;
        }

        .content h1 {
            font-size: 32px;
            color: #333;
        }

        .content p {
            margin-bottom: 30px;
            color: #555;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 15px;
            background-color: #5358e9;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #4347d7;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Connect Alumni</h2>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Report Data</a></li>
                <li><a href="#">Delete</a></li>
                <li class="active"><a href="#">Pengaturan</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Pengaturan</h1>
            <p>Ubah pengaturan profil anda</p>
            <form>
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Username">

                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" placeholder="Nomor Telepon">

                <label for="new-password">Password Baru</label>
                <input type="password" id="new-password" placeholder="Password Baru">

                <p>Ubah Password Anda?</p>
                <button type="submit">Ganti Password</button>
            </form>
        </div>
    </div>
</body>
</html>