@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="sidebar p-3">
        <img src="{{ asset('images/sb-ptih-pnjg.png') }}" alt="image">
        <h6>SISTEM INFORMASI SISWA/I SOBAT BIMBEL</h6><br>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('profile') }}"><i class="fa-solid fa-user-large"></i> PROFIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('daftar_hadir') }}"><i class="fa-solid fa-calendar-check"></i> DAFTAR HADIR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('nilai.siswa') }}"><i class="fa-solid fa-graduation-cap"></i> NILAI</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            SELAMAT DATANG, {{ Auth::user()->name }}!
            <div class="dropdown">
                <i class="fa-regular fa-circle-user" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item text-white" href="{{ route('change_password') }}">Ganti Kata Sandi</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-white" href="{{ route('logout') }}">Keluar</a></li>
                </ul>
            </div>
        </div>
        <div class="table-container">
            <h4>DAFTAR NILAI</h4>
            <table>
                <tr>
                    <th rowspan="2" class="subject-column">Mapel</th>
                    <th colspan="16">Minggu ke</th>
                </tr>
                <tr>
                    @for ($i = 1; $i <= 16; $i++)
                        <th>{{ $i }}</th>
                    @endfor
                </tr>
                @foreach ($nilai as $mapel => $minggu_data)
                    <tr>
                        <td class="subject-column">{{ $mapel }}</td>
                        @for ($i = 1; $i <= 16; $i++)
                            <td>{{ $minggu_data->firstWhere('minggu', $i)->nilai ?? '-' }}</td>
                        @endfor
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
