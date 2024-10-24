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

        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #EDEFFF;
            padding-top: 20px;
            color: #fff;
            transition: transform 0.3s ease; /* Animasi smooth untuk show/hide */
        }

        .sidebar.hidden {
            transform: translateX(-100%); /* Sidebar keluar dari layar */
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #0a0a0a;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ffffff;
            color: #f56e07;
        }

        /* Konten utama */
        .content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        .content.sidebar-hidden {
            margin-left: 0;
        }

        /* Tombol toggle sidebar */
        .toggle-btn {
            width: 100%;
            font-size: 18px;
            background-color: transparent;
            color: #0a0a0a;
            padding: 15px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            text-align: left;
        }



    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        
        <img src="{{ asset('/assets/frontsite/images/logo.png') }}" alt="Social Media" class="mx-auto mb-9 w-38 h-auto" style="width: 200px; height: auto; position: relative; right: -15px;">
        <a href="#">Beranda</a>
        <a href="#">Report Data</a>
        <a href="#">Delete</a>
        <a href="#">Pengaturan</a>
    </div>

    <!-- Main content -->
    <div class="content" id="mainContent">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
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

    <!-- JavaScript untuk toggle sidebar -->
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var mainContent = document.getElementById("mainContent");

            // Menambahkan atau menghapus kelas 'hidden' untuk sidebar
            sidebar.classList.toggle("hidden");

            // Menambahkan atau menghapus kelas 'sidebar-hidden' untuk main content
            mainContent.classList.toggle("sidebar-hidden");
        }
    </script>
</body>
</html>
