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
    form button {
        width: 100%;
        padding: 20px;
        margin-bottom: 0px;
        border-radius: 25px;
        box-sizing: border-box; /* Ensure padding and border are included in the width and height */
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
            <span class="toggle-icon">☰</span> <span class="bold-text">Pengaturan</span>
        </button>
        <h2>ubah pengaturan profil anda</h2>
    
    <form style="margin-top: 75px;">
        <label for="username">Username</label><p>
        <input type="text" id="username" placeholder="Username"><P>

        <label for="phone">Nomor Telepon</label><P>
        <input type="text" id="phone" placeholder="Nomor Telepon"><P>

        <label for="new-password">Password Baru</label><P>
        <input type="password" id="new-password" placeholder="Password Baru"><P>
            
        <p><div style="text-align: center;">
        Ubah Password Anda?</p>
        <button type="submit">Ganti Password</button>
        <p>
        <button type="submit">Cancel</button><p>
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