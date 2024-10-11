<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>
