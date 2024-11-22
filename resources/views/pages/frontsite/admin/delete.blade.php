<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        table th {
            color: #000000;
            font-weight: normal;
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
            <span class="toggle-icon">☰</span> <span class="bold-text">Delete</span>
        </button>

        <div class="container">
            <div class="header">
                <div class="left">Menampilkan {{ count($testimoni) }} hasil</div>
                <div class="right">
                    <!-- Form pencarian -->
                    <form action="{{ route('delete.index') }}" method="GET" class="d-inline">
                        <input type="text" name="search" class="form-control d-inline" style="width: 200px;" placeholder="Cari..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="15%">Dari</th>
                        <th width="10%">Pekerjaan</th>
                        <th width="10%">Program Studi</th>
                        <th width="10%">Angkatan</th>
                        <th width="10%">Judul</th>
                        <th width="20%">Link Video</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimoni as $testimoni)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $testimoni['name'] }}</td>
                            <td>{{ $testimoni['pekerjaan'] }}</td>
                            <td>{{ $testimoni['program_studi'] }}</td>
                            <td>{{ $testimoni['angkatan'] }}</td>
                            <td>{{ $testimoni['judul_utama'] }}</td>
                            <td>{{ $testimoni['link_video'] }}</td>
                            <td>
                                <a href="{{ route('delete.showupdate', $testimoni['id']) }}"><button type="button" class="btn btn-info rounded-pill">Edit</button></a>
                                <form action="{{ route('delete.delete', $testimoni['id']) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded-pill" onclick="return confirm('Anda yakin ingin menghapus Testimoni ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada hasil ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var mainContent = document.getElementById("mainContent");
            sidebar.classList.toggle("hidden");
            mainContent.classList.toggle("sidebar-hidden");
        }
    </script>
</body>

</html>