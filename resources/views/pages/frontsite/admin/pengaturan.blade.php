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
        <h1>Pengaturan</h1>
        <p>Ubah pengaturan profil anda</p>

        <div class="table-responsive small">
        <form method="POST" action="http://127.0.0.1:8000/login" class="grid gap-6">

                            
            <input type="hidden" name="_token" value="eJ1hn1e344lUxegG2KRae7QGL1OtKve0rDrTm5Gx" autocomplete="off">
            <label class="block">
                <input for="email" type="email" id="email" name="email" class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]" placeholder="Username" value="" required="" autofocus="">
            </label>

            <label class="block">
                <input for="email" type="email" id="email" name="email" class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]" placeholder="Nomor Telepon" value="" required="" autofocus="">
            </label>

            <label class="block">
                <input for="password" type="password" id="password" name="password" class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]" placeholder="Password Baru">
            </label>
            <p>Ubah Password Anda?</p>

            <div class="mt-10 grid gap-6">
                <button class="text-center text-white text-lg font-medium bg-[#0D63F3] px-10 py-4 rounded-full">
                Ganti Password
                </button>
            </div>
            </form>
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
