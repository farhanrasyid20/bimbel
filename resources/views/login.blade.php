<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow" style="width: 300px;">
        <h2 class="text-center">Login</h2>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" class="form-control" placeholder="Masukkan username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Masukkan password">
        </div>
        <button class="btn btn-primary w-100" onclick="login()">Login</button>
        <p id="message" class="text-danger text-center mt-2"></p>
    </div>

    <script>
        function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === "admin" && password === "1234") {
                alert("Login berhasil!");
            } else {
                document.getElementById('message').innerText = "Username atau password salah";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>