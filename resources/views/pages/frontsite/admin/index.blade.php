<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .report-table th, .report-table td {
            padding: 10px;
            text-align: middle;
            border-bottom: 1px solid #ddd;
        }

        .report-table th {
            font-weight: normal;
            color: #000000;
        }

        .report-table td {
            color: #888;
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

        /* Styling untuk .container */
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            padding: 10px;
        }

        .toggle-icon {
    font-size: 24px; /* Atur ukuran ikon toggle di sini */
}

.bold-text {
    font-weight: bold; /* Membuat teks "Beranda" tebal */
    font-size: 28px; /* Atur ukuran teks "Beranda" di sini */
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
            <span class="toggle-icon">☰</span> <span class="bold-text">Beranda</span>
        </button>
        
    <div style="text-align: center;">
        <h2>New Report Data</h2>
        <p>5 data laporan terbaru yang masuk dari user</p>
    </div>
    <table class="report-table">
        <tbody><tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Waktu</th>
        </tr>
        <tr>
            <td><div class="container">Sangid Astawa</div></td>
            <td><div class="container">terjadi pelanggaran user</div></td>
            <td><div class="container">15 jam yang lalu</div></td>
        </tr>
        <tr>
            <td><div class="container">Ade Kesuma</div></td>
            <td><div class="container">terjadi pelanggaran user</div></td>
            <td><div class="container">10/12/2021</div></td>
        </tr>
        <tr>
            <td><div class="container">Wardita</div></td>
            <td><div class="container">terjadi pelanggaran user</div></td>
            <td><div class="container">08/05/2021</div></td>
        </tr>
        <tr>
            <td><div class="container">Rama</div></td>
            <td><div class="container">terjadi pelanggaran user</div></td>
            <td><div class="container">10/06/2021</div></td>
        </tr>
        <tr>
            <td><div class="container">Arik</div></td>
            <td><div class="container">terjadi pelanggaran user</div></td>
            <td><div class="container">12/07/2021</div></td>
        </tr>
        <tr>
            <td><div class="container">Asep</div></td>
            <td><div class="container">terjadi pelanggaran user</div></td>
            <td><div class="container">23/05/2021</div></td>
        </tr>
    </tbody></table>
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
