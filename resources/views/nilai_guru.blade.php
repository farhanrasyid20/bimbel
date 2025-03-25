<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nilai Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            width: 240px;
            background-color: #5F4A8B;
            color: white;
            text-align: fixed;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #F7C319;
            text-align: fixed;
            text-decoration: none;
        }
        .sidebar .nav-link {
            padding-left: 29px;
        }
        .sidebar .nav-link i {
            margin-right: 5px;
        }
        .sidebar h6 {
            padding-top: 10px;
            font-size: 15px;
            text-align: center;
        }
        .content {
            flex-grow: 1;
            width: 90%;
        }
        .header {
            background-color: #F7C319;
            color: white;
            padding: 18px;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .dropdown i {
            cursor: pointer;
        }
        .dropdown ul {
            background-color: #5F4A8B;
        }
        .dropdown-item:hover {
            background-color: #F7C319;
        }
        h4 {
            color: #5F4A8B;
            font-weight: bold;
            margin-top: 25px;
            padding-left: 25px;
        }
        .card-container {
            display: flex;
            justify-content: space-around;
            margin-top: 150px;
        }
        .card {
            width: 250px;
            height: 200px;
            background-color: #5F4A8B;
            color: white;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 35px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card h2 {
            font-size: 17px;
            text-align: center;
            font-weight: bold;
        }
        .card button {
            background-color: #F7C319;
            color: #5F4A8B;
            border: none;
            border-radius: 10px;
            padding: 6px 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #FFB300;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar p-3">
            <img src="{{ asset('sb-ptih-pnjg.png') }}" alt="image">
            <h6>SISTEM INFORMASI SISWA/I SOBAT BIMBEL</h6><br>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ url('/profil-guru') }}">
                        <i class="fa-solid fa-user-large"></i> PROFIL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/daftar-hadir-guru') }}">
                        <i class="fa-solid fa-calendar-check"></i> DAFTAR HADIR
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/nilai-guru') }}">
                        <i class="fa-solid fa-graduation-cap"></i> NILAI
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="header">
                SELAMAT DATANG, PENGGUNA!
                <div class="dropdown">
                    <i class="fa-regular fa-circle-user" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-white" href="{{ url('/ganti-kata-sandi-guru') }}">Ganti Kata Sandi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-white" href="{{ url('/logout') }}">Keluar</a></li>
                    </ul>
                </div>
            </div>
            <div class="table-container">
                <h4>NILAI</h4>
                <div class="card-container">
                    <div class="card">
                        <h2>BAHASA INDONESIA</h2>
                        <button onclick="window.location.href='{{ url('/nilai-indo') }}'">
                            <i class="fas fa-plus-circle me-2"></i>INPUT
                        </button>
                    </div>
                    <div class="card">
                        <h2>BAHASA INGGRIS</h2>
                        <button onclick="window.location.href='{{ url('/nilai-inggris') }}'">
                            <i class="fas fa-plus-circle me-2"></i>INPUT
                        </button>
                    </div>
                    <div class="card">
                        <h2>MATEMATIKA</h2>
                        <button onclick="window.location.href='{{ url('/nilai-mtk') }}'">
                            <i class="fas fa-plus-circle me-2"></i>INPUT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
