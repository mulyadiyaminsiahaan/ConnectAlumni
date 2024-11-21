<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            /* Animasi smooth untuk show/hide */
        }

        /* Sidebar tersembunyi */
        .sidebar.hidden {
            transform: translateX(-100%);
            /* Sidebar keluar dari layar */
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

        form input,
        form button,
        form select {
            width: 100%;
            padding: 20px;
            margin-bottom: 0px;
            border-radius: 25px;
            box-sizing: border-box;
            /* Ensure padding and border are included in the width and height */
        }

        form input {
            border: 1px solid #ccc;
        }

        form button {
            background-color: #5358e9;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #4347d7;
        }


        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
            /* Animasi smooth saat sidebar terbuka/tutup */
        }

        /* Ketika sidebar ditutup, konten bergerak ke kiri */
        .main-content.sidebar-hidden {
            margin-left: 0;
            /* Konten kembali ke posisi awal */
        }

        .main-content h1 {
            margin: 0;
            font-size: 24px;
        }

        .main-content h2 {
            font-size: 14px;
            color: gray;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
            margin-top: 50px;
        }

        .header .left {
            font-size: 14px;
        }

        .header .right {
            font-size: 14px;
            color: gray;
        }

        /* Tombol toggle sidebar */
        .toggle-btn {
            width: 100%;
            /* Membuat tombol selebar sidebar */
            font-size: 18px;
            background-color: transparent;
            /* Membuat background transparan */
            color: #0a0a0a;
            /* Warna teks tetap hitam untuk kontras */
            padding: 15px;
            /* Menambahkan padding agar tombol lebih besar */
            border: none;
            cursor: pointer;
            transition: 0.3s;
            text-align: left;
            /* Agar teks berada di kiri */
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
            /* Atur ukuran ikon toggle di sini */
        }

        .bold-text {
            font-weight: bold;
            /* Membuat teks "Beranda" tebal */
            font-size: 28px;
            /* Atur ukuran teks "Beranda" di sini */
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
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="sign-out">
            Log out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
    </div>
    <!-- Main content -->
    <div class="main-content" id="mainContent">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <span class="toggle-icon">☰</span> <span class="bold-text">Edit</span>
        </button>
        <h2>Ubah data Testimoni Anda</h2>
        <form action="{{ route('delete.update', $testimoni['id']) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')

            <!-- Input Pekerjaan -->
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" id="pekerjaan" value="{{ $testimoni['pekerjaan'] }}" name="pekerjaan">

            <!-- Dropdown Program Studi -->
            <label for="program_studi">Program Studi</label>
            <select id="program_studi" name="program_studi" class="w-full p-4 border rounded-full bg-gray-100 text-gray-700">
                <option value="" disabled selected>Pilih Program Studi</option>
                <option value="Sistem Informasi" {{ $testimoni['program_studi'] == 'Sistem Informasi' ? 'selected' : '' }}>S1 Sistem Informasi</option>
                <option value="Informatika" {{ $testimoni['program_studi'] == 'Informatika' ? 'selected' : '' }}>S1 Informatika</option>
                <option value="Teknik Elektro" {{ $testimoni['program_studi'] == 'Teknik Elektro' ? 'selected' : '' }}>S1 Teknik Elektro</option>
                <option value="Manajemen Rekayasa" {{ $testimoni['program_studi'] == 'Manajemen Rekayasa' ? 'selected' : '' }}>S1 Manajemen Rekayasa</option>
                <option value="Metalurgi" {{ $testimoni['program_studi'] == 'Metalurgi' ? 'selected' : '' }}>S1 Metalurgi</option>
                <option value="Bioproses" {{ $testimoni['program_studi'] == 'Bioproses' ? 'selected' : '' }}>S1 Bioproses</option>
                <option value="D3 Teknologi Informasi" {{ $testimoni['program_studi'] == 'D3 Teknologi Informasi' ? 'selected' : '' }}>D3 Teknologi Informasi</option>
                <option value="D3 Teknik Elektro" {{ $testimoni['program_studi'] == 'D3 Teknik Elektro' ? 'selected' : '' }}>D3 Teknik Elektro</option>
                <option value="D4 Rekayasa Perangkat Lunak" {{ $testimoni['program_studi'] == 'D4 Rekayasa Perangkat Lunak' ? 'selected' : '' }}>D4 Rekayasa Perangkat Lunak</option>
            </select>

            <!-- Dropdown Angkatan -->
            <label for="angkatan">Angkatan</label>
            <select id="angkatan" name="angkatan" class="w-full p-4 border rounded-full bg-gray-100 text-gray-700">
                <option value="" disabled selected>Pilih Angkatan</option>
                @for ($year = 2000; $year <= date('Y'); $year++) <!-- Dinamis -->
                    <option value="{{ $year }}" {{ $testimoni['angkatan'] == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endfor
            </select>

            <!-- Input Judul Utama -->
            <label for="judul_utama">Judul Utama</label>
            <input type="text" id="judul_utama" name="judul_utama" value="{{ $testimoni['judul_utama'] }}" placeholder="Judul Utama">

            <!-- Input Link Video -->
            <label for="link_video">Link Video</label>
            <input type="url" id="link_video" name="link_video" value="{{ $testimoni['link_video'] }}" placeholder="Link Video">

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>


    </div>

</body>

</html>
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