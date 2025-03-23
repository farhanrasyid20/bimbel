<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Sobat Bimbel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Gaya CSS Anda di sini */
        .logo {
            padding-top: 30px;
            width: 250px;
            height: auto;
            object-fit: cover;
            display: block;
            margin: auto;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 25px;
            padding-top: 20px;
            padding-bottom: 25px;
            background-color: #5F4A8B;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h6 {
            font: arial, sans-serif;
            color: #5F4A8B;
            text-align: center;
            margin-top: 25px;
        }
        h4 {
            font: arial, sans-serif;
            color: white;
        }
        .form-group {
            margin-bottom: 10px;
            padding-top: 15px;
            position: relative;
        }
        .form-group input {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 50px;
            font-size: 16px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .form-group i {
            position: absolute;
            right: 70px;
            transform: translateY(33px);
            color: gray;
        }
        .form-group input:focus {
            border-color: #F7C319;
            outline: none;
        }
        button {
            background-color: #F7C319;
            color: white;
            border: none;
            padding: 8px 35px;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 35px;
        }
        button:hover {
            background-color: #FFB300;
        }
        .error-message {
            color: #F7C319;
            display: none;
        }
    </style>
</head>
<body>
    <img src="{{ asset('sb2.png') }}" alt="logo" class="logo">
    <h6>SISTEM INFORMASI SISWA/I SOBAT BIMBEL</h6>
    <div class="login-container">
        <h4>Masuk</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <div class="form-group">
                    <input type="text" name="user" id="user" placeholder="Nama Pengguna">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <input type="password" name="pass" id="pass" placeholder="Kata Sandi">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>
            <button type="submit"><i class="fas fa-sign-in-alt"></i> Masuk</button>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
