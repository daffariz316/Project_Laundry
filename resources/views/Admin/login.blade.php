<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/logo yuma laundry.png" type="image/x-icon">
    <!-- font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- jonsuh -->
    <link rel="stylesheet" href="{{ asset('assets/css/hamburgers.css') }}">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-lg flex flex-col lg:flex-row w-full h-full">
        <!-- Left Panel -->
        <div class="relative w-full lg:w-2/5 bg-white p-10 flex flex-col justify-center items-center text-center">
            <!-- Logo di pojok kiri atas -->
            <img src="{{ asset('assets/img/logo yuma laundry.png') }}" alt="Yuma Laundry Logo"
                class="absolute top-0 left-0 m-4 w-auto max-w-[100px] md:max-w-[150px] lg:max-w-[170px] object-contain">

            <!-- Kurangi jarak margin-top di tampilan mobile -->
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 mt-10 md:mt-20 lg:mt-0 md:mb-2 mb-0">Halaman</h1>
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 md:mb-12 mb-8">Masuk Admin</h1>

            <!-- Responsive Icon Size -->
            <div class="bg-blue-100 rounded-full p-0 mb-4">
                <i class='bx bxs-user-circle text-[100px] md:text-[150px] lg:text-[200px]'></i>
            </div>
        </div>
        <!-- Right Panel (Form) -->
        <div
            class="w-full lg:w-3/5 bg-blue-200 p-10 flex flex-col justify-center rounded-tl-[30px] lg:rounded-l-[30px]">
            <form action="{{ url('admin/login') }}" class="space-y-5" method="POST">
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
                    *Belum memiliki akun? Silahkan <a href="{{ url('admin/register') }}"
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
