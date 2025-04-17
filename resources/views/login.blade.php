<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Sobat Bimbel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center h-screen">

    <div class="flex flex-col items-center space-y-6">
        <!-- Logo -->
        <img src="{{ asset('images/sobat-bimbel.png') }}" alt="Sobat Bimbel Logo" class="w-40">

        <!-- Title -->
        <h2 class="text-blue-600 text-sm font-semibold uppercase tracking-wide text-center">
            SISTEM INFORMASI SISWA/I SOBAT BIMBEL
        </h2>

        <!-- Form Card -->
        <div class="bg-blue-900 p-8 rounded-2xl shadow-md w-80 text-white">
            <h3 class="text-center text-lg font-bold mb-6">MASUK</h3>

            <form action="#" method="POST" class="space-y-4">
                @csrf

                <!-- Username -->
                <div class="relative">
                    <input type="text" name="username" placeholder="Nama Pengguna" class="w-full p-3 rounded-full text-black focus:outline-none">
                    <span class="absolute right-4 top-3 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5.121 17.804A7.963 7.963 0 0112 15a7.963 7.963 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </span>
                </div>

                <!-- Password -->
                <div class="relative">
                    <input type="password" name="password" placeholder="Kata Sandi" class="w-full p-3 rounded-full text-black focus:outline-none">
                    <span class="absolute right-4 top-3 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11c1.657 0 3-1.343 3-3V6a3 3 0 00-6 0v2c0 1.657 1.343 3 3 3zM5 11h14v10H5V11z"/>
                        </svg>
                    </span>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-full font-semibold">
                    MASUK
                </button>
            </form>
        </div>
    </div>

</body>
</html>

