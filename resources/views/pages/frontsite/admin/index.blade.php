@section('title', 'Admin')

@section('content')

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
            width: 400px;
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
            padding: 20px;
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

        .toggle-btn:hover {
            background-color: rgba(0, 0, 0, 0.1); /* Warna background saat hover */
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div style="display: flex; align-items: center; justify-content: center; padding: 10px 20px; flex-direction: column;">
        <!-- Tombol toggle dan logo -->
        <button class="toggle-btn" onclick="toggleSidebar()" style="font-size: 160%; margin-bottom: 15px;">☰</button>
        <img src="{{ asset('/assets/frontsite/images/logo.png') }}" alt="Connect Alumni" style="width: 250px; height: auto;">
    </div>
    <a href="#">Beranda</a>
    <a href="{{ route('report.index') }}">Report Data</a>
    <a href="{{ route('delete.index') }}">Delete</a>
    <a href="{{ route('pengaturan.index') }}">Pengaturan</a>
</div>

<!-- Main content -->
<div class="main-content" id="mainContent">
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
        var sidebar
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
