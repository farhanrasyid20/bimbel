<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .header { background-color: #F7C319; color: white; padding: 18px; font-size: 20px; font-weight: bold; display: flex; align-items: center; justify-content: space-between; }
        .sidebar { height: 100vh; width: 240px; background-color: #5F4A8B; color: white; position: fixed; padding: 20px; }
        .sidebar a:hover { background-color: #F7C319; }
        .sidebar .nav-link { padding-left: 35px; color: white; }
        .sidebar .nav-link i { margin-right: 5px; }
        .sidebar h6 { padding-top: 10px; font-size: 15px; text-align: center; }
        .content { margin-left: 260px; padding: 20px; width: calc(100% - 260px); }
        table { width: 80%; margin: auto; border-collapse: collapse; }
        table, th, td { border: 2px solid black; text-align: center; padding: 10px; }
        .subject-column { width: 200px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <img src="{{ asset('images/sb-ptih-pnjg.png') }}" alt="image">
            <h6>SISTEM INFORMASI SISWA/I SOBAT BIMBEL</h6><br>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fa-solid fa-user-large"></i> PROFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-calendar-check"></i> DAFTAR HADIR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nilai.siswa') }}"><i class="fa-solid fa-graduation-cap"></i> NILAI</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="header">
                SELAMAT DATANG, {{ Auth::user()->name ?? 'Siswa' }}!
                <div class="dropdown">
                    <i class="fa-regular fa-circle-user" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Ganti Kata Sandi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Keluar</a></li>
                    </ul>
                </div>
            </div>
            <div class="table-container">
                <h3>DAFTAR NILAI</h3>
                <table class="table table-bordered mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2" class="subject-column">Mapel</th>
                            <th colspan="16">Minggu ke</th>
                        </tr>
                        <tr>
                            @for ($i = 1; $i <= 16; $i++)
                                <th>{{ $i }}</th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilai as $mapel => $minggu_data)
                            <tr>
                                <td class="subject-column">{{ $mapel }}</td>
                                @for ($i = 1; $i <= 16; $i++)
                                    <td>{{ optional($minggu_data->firstWhere('minggu', $i))->nilai ?? '-' }}</td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
