<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f0f3ff;
            padding-top: 20px;
            color: #ff6f00;
            transition: transform 0.3s ease;
        }

        .sidebar.hidden {
            transform: translateX(-100%);
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
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 25px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }

        .main-content.sidebar-hidden {
            margin-left: 0;
        }

        .main-content h1 {
            margin: 0;
            font-size: 24px;
        }

        .main-content h2 {
            font-size: 14px;
            color: gray;
        }

        .toggle-btn {
            width: 100%;
            font-size: 18px;
            background-color: transparent;
            color: #0a0a0a;
            padding: 15px;
            border: none;
            cursor: pointer;
            text-align: left;
        }

        .sign-out {
            display: block;
            padding: 10px 15px;
            font-size: 18px;
            color: #f4f4f4;
            text-align: center;
            background-color: #525FE1;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .sign-out:hover {
            background-color: #525FE1;
        }

        .toggle-icon {
            font-size: 24px;
        }

        .bold-text {
            font-weight: bold;
            font-size: 28px;
        }

        /* Tombol Ganti Password dan Cancel */
        .button-container {
            display: flex;
            justify-content: space-between; /* Pisahkan tombol ke kiri dan kanan */
            margin-top: 20px; /* Beri jarak ke atas */
        }

        form button[type="submit"]:nth-child(1) {
            background-color: #007bff; /* Warna biru */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        form button[type="submit"]:nth-child(1):hover {
            background-color: #0056b3;
        }

        form button[type="submit"]:nth-child(2) {
            background-color: #dc3545; /* Warna merah */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        form button[type="submit"]:nth-child(2):hover {
            background-color: #a71d2a;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <img src="{{ asset('/assets/frontsite/images/logo.png') }}" alt="Social Media" class="mx-auto mb-9 w-38 h-auto" style="width: 200px; height: auto; position: relative; right: -15px;">
        <a href="{{ route('admin.dashboard') }}">Beranda</a>
        <a href="/report">Report Data</a>
        <a href="/delete">Delete</a>
        <a href="/pengaturan">Pengaturan</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="sign-out">
            Log out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Main content -->
    <div class="main-content" id="mainContent">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <span class="toggle-icon">☰</span> <span class="bold-text">Pengaturan</span>
        </button>
        <h2>Ubah pengaturan profil anda</h2>

        <form style="margin-top: 75px;">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Username">

            <label for="phone">Nomor Telepon</label>
            <input type="text" id="phone" placeholder="Nomor Telepon">

            <label for="new-password">Password Baru</label>
            <input type="password" id="new-password" placeholder="Password Baru">

            <!-- Tombol Ganti Password dan Cancel -->
            <div class="button-container">
                <button type="submit">Ganti Password</button>
                <button type="submit">Cancel</button>
            </div>
        </form>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var mainContent = document.getElementById("mainContent");

            // Menambahkan atau menghapus kelas 'hidden' untuk sidebar
            sidebar.classList.toggle("hidden");

            // Menambahkan atau menghapus kelas 'sidebar-hidden' untuk main content
            mainContent.classList.toggle("sidebar-hidden");

            // Debugging
            console.log('Sidebar visibility:', !sidebar.classList.contains("hidden"));
        }
    </script>
</body>
</html>
