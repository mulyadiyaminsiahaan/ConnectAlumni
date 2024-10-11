<<<<<<< HEAD
<<<<<<< HEAD
=======
@section('title', 'Admin')

@section('content')

>>>>>>> 028fac8be9b330aef824798f3d53c990dd884566
=======
>>>>>>> 2f2ab6ca0ab584cf7bab757a86592d3b2d11926e
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Connect Alumni Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            display: flex;
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        .sidebar {
            width: 250px;
            background-color: #f5f5f5;
            padding: 20px;
            border-right: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .sidebar.closed {
            width: 0;
            padding: 0;
            overflow: hidden;
        }

        .logo {
            text-align: center;
            margin-bottom: 50px; /* Increased bottom margin for spacing */
            padding: 20px; /* Added padding around the logo */
            transition: opacity 0.3s ease;
        }

        .sidebar.closed .logo {
            opacity: 0;
        }

        .logo h2 {
            color: #ff6700;
        }

        .nav {
            list-style: none;
        }

        .nav li {
            margin-bottom: 20px;
        }

        .nav li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .nav li a:hover {
            color: #ff6700;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .main-content.full-width {
            margin-left: 0;
        }

        .main-content h2 {
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center; /* Center the "New Report Data" text */
        }

        .main-content p {
            color: #888;
            margin-bottom: 20px;
            text-align: center; /* Center the description as well */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        table th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        .toggle-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            cursor: pointer;
            background-color: #ff6700;
            border: none;
            padding: 10px 15px;
            color: white;
            font-size: 16px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Sidebar Toggle Button -->
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="logo">
                <h2>Connect Alumni</h2>
            </div>
            <ul class="nav">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Report Data</a></li>
                <li><a href="#">Delete</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content" id="main-content">
            <h2>New Report Data</h2>
            <p>5 data aduan terbaru yang masuk dari user</p>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sangid Astawa</td>
                        <td>terjadi pelanggaran user</td>
                        <td>15 jam yang lalu</td>
                    </tr>
                    <tr>
                        <td>Ade Kesuma</td>
                        <td>terjadi pelanggaran user</td>
                        <td>10/12/2021</td>
                    </tr>
                    <tr>
                        <td>Wardita</td>
                        <td>terjadi pelanggaran user</td>
                        <td>08/05/2021</td>
                    </tr>
                    <tr>
                        <td>Rama</td>
                        <td>terjadi pelanggaran user</td>
                        <td>10/06/2021</td>
                    </tr>
                    <tr>
                        <td>Arik</td>
                        <td>terjadi pelanggaran user</td>
                        <td>12/07/2021</td>
                    </tr>
                    <tr>
                        <td>Asep</td>
                        <td>terjadi pelanggaran user</td>
                        <td>23/05/2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var mainContent = document.getElementById('main-content');

            // Toggle the closed class for the sidebar
            sidebar.classList.toggle('closed');
            
            // Toggle full-width class for main content
            mainContent.classList.toggle('full-width');
        }
    </script>
=======
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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

        /* Sidebar tersembunyi */
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

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            min-height: 100vh;
            transition: margin-left 0.3s ease; /* Animasi smooth saat sidebar terbuka/tutup */
        }

        /* Ketika sidebar ditutup, konten bergerak ke kiri */
        .main-content.sidebar-hidden {
            margin-left: 0; /* Konten kembali ke posisi awal */
        }

        .main-content h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Tabel Style */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
            text-align: left;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table-responsive {
            overflow-x: auto;
        }

        /* Tombol toggle sidebar */
        .toggle-btn {
            width: 100%; /* Membuat tombol selebar sidebar */
            font-size: 18px;
            background-color: transparent; /* Membuat background transparan */
            color: #0a0a0a; /* Warna teks tetap hitam untuk kontras */
            padding: 15px; /* Menambahkan padding agar tombol lebih besar */
            border: none;
            cursor: pointer;
            transition: 0.3s;
            text-align: left; /* Agar teks berada di kiri */
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
    <div class="main-content" id="mainContent">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        <h1>Beranda</h1>
        <p>This is your admin dashboard. Manage your site from here.</p>

        <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Waktu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sangid Astawa</td>
                  <td>terjadi pelanggaran user</td>
                  <td>15 jam yang lalu</td>
                </tr>
                <tr>
                  <td>Ade Kesuma</td>
                  <td>terjadi pelanggaran user</td>
                  <td>10/12/2021</td>
                </tr>
                <tr>
                  <td>Wardita</td>
                  <td>terjadi pelanggaran user</td>
                  <td>08/05/2021</td>
                </tr>
              </tbody>
            </table>
        </div>
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

            // Debugging
            console.log('Sidebar visibility:', !sidebar.classList.contains("hidden"));
        }
    </script>

>>>>>>> 028fac8be9b330aef824798f3d53c990dd884566
</body>
</html>
