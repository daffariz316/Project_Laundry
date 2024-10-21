<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/icon.jpg') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon.jpg') }}" />
    <title>Yuma Laundry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-lg flex flex-col lg:flex-row w-full h-full">
        <!-- Left Panel -->
        <div class="relative w-full lg:w-2/5 bg-white p-10 flex flex-col justify-center items-center text-center">
            <!-- Logo di pojok kiri atas -->
            <img src="{{ asset('assets/img/logo yuma laundry.png') }}" alt="Yuma Laundry Logo"
                class="absolute top-0 left-0 m-4 w-auto max-w-[150px] md:max-w-[200px] lg:max-w-[170px] object-contain">
            <h1 class="text-3xl font-bold text-gray-800 mt-40 lg:mt-0 mb-4">Halaman</h1>
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Daftar Pengguna</h1>
            <div class="bg-blue-100 rounded-full p-4 mb-4">
                <img src="{{ asset('assets/img/bxs-user-circle.svg') }}" alt="User Icon" class="w-40">
            </div>
        </div>
        <!-- Right Panel (Form) -->
        <div
            class="w-full lg:w-3/5 bg-blue-200 p-10 flex flex-col justify-center rounded-tl-[30px] lg:rounded-l-[30px]">
            <form action="{{ route('admin-register') }}" class="space-y-5" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <!-- Link dan Tombol Masuk -->
                <div class="text-sm text-gray-600">
                    *Belum memiliki akun? Silahkan <a href="{{ route('admin-register') }}"
                        class="text-blue-500 hover:underline">Daftar
                        akun</a>
                </div>
                <!-- Wrapper untuk memindahkan tombol ke kanan -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white py-2 px-6 rounded-full hover:bg-blue-600 transition flex items-center">
                        <i class='bx bxs-key text-xl mr-2'></i>
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
