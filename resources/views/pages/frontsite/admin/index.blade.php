<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            Sign out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Main content -->
    <div class="main-content" id="mainContent">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        <h1>Beranda</h1>
        <p>This is your admin dashboard. Manage your site from here.</p>

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

</body>
</html>