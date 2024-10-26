<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

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
    <!-- Muat file CSS custom terakhir untuk menimpa style dari Tailwind -->
    <link rel="stylesheet" href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}" />

</head>

<body class="bg-[#F7FEFF] ">
    <!-- Navbar -->
    <div class="navbar sticky top-0 z-50 px-4 py-3 bg-[#F7FEFF] duration-300" id="navbar">
        <div class="mx-auto">
            <div class="navbar-box flex items-center justify-between">
                <div class="logo flex items-center">
                    <img src="{{ asset('assets/img/logo yuma laundry.png') }}" alt="logo"
                        class="md:w-40 w-24 h-auto">
                </div>

                <ul
                    class="menu md:flex gap-x-7 items-center font-semibold flex-col md:flex-row md:static absolute z-10 top-24 left-0
                    md:bg-transparent bg-[#F7FEFF] md:w-auto w-full text-[16px] md:text-[18px]">
                    <li class="py-2 w-full text-center">
                        <a href="{{ route('user.dashboard-u') }}" class="hover:text-[#0F67B1]">Beranda</a>
                    </li>
                    <li class="py-2 w-full text-center">
                        <a href="{{ route('user.servis') }}" class="hover:text-[#0F67B1]">Servis</a>
                    </li>
                    <li class="py-2 w-full text-center">
                        @auth
                            <a href="{{ url('user/antrian') }}" class="hover:text-[#0F67B1] text-[#0F67B1]">Antrian</a>
                        @else
                            <span class="text-gray-400 cursor-not-allowed">Antrian</span>
                        @endauth
                    </li>
                    <li class="opacity-50 md:block hidden">|</li>
                    <li class="py-2 w-full text-center">
                        @guest
                            <!-- Jika belum login, tampilkan tombol 'Masuk' -->
                            <a href="{{ route('user.login') }}">
                                <button
                                    class="hover:text-[#0F67B1] md:hover:text-[#0F67B1] bg-[#96C9F4] text-white px-4 py-2 rounded-lg md:bg-[#96C9F4] md:text-white">
                                    Masuk
                                </button>
                            </a>
                        @else
                            <!-- Jika sudah login, tampilkan ikon pengguna -->
                            <a href="{{ route('user.profile') }}">
                                <!-- Ganti 'user.editProfile' dengan nama rute profil user -->
                                <i
                                    class='bx bxs-user-circle cursor-pointer text-[40px] md:text-[100px] lg:text-[40px] hover:text-[#0F67B1]'></i>
                            </a>
                        @endguest
                    </li>
                </ul>


                <div class="md:hidden block">
                    <button class="hamburger hamburger--squeeze" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner bg-[#96C9F4] before:bg-[#96C9F4] after:bg-[#96C9F4]"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container mx-auto py-10">
            <!-- Title -->
            <h1 class="text-center text-2xl font-bold mb-6">Antrian Pakaian Yuma Laundry</h1>

            <!-- Garis di atas tabel -->
            <hr class="border-[#0F67B1] mb-8 md:w-[600px] w-[300px] mx-auto">

            <!-- Table -->
            <div class="overflow-x-auto">
                @php
                    use Carbon\Carbon;
                @endphp
                <table class="min-w-full bg-white border border-[#0F67B1] text-center">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border border-[#0F67B1]">No</th>
                            <th class="px-4 py-2 border border-[#0F67B1]">Nama Pelanggan</th>
                            <th class="px-4 py-2 border border-[#0F67B1]">Nama Barang</th>
                            <th class="px-4 py-2 border border-[#0F67B1]">Kuantitas</th>
                            <th class="px-4 py-2 border border-[#0F67B1]">Status</th>
                            <th class="px-4 py-2 border border-[#0F67B1]">Jenis</th>
                            <th class="px-4 py-2 border border-[#0F67B1]">Tanggal Masuk</th>
                            <th class="px-4 py-2 border border-[#0F67B1]">Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($waitings as $index => $waiting)
                            <tr>
                                <td class="px-4 py-2 border border-[#0F67B1]">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border border-[#0F67B1]">{{ $waiting->nama_pelanggan }}</td>
                                <td class="px-4 py-2 border border-[#0F67B1]">{{ $waiting->nama_barang }}</td>
                                <td class="px-4 py-2 border border-[#0F67B1]">{{ $waiting->kuantitas_barang }}</td>
                                <td class="px-4 py-2 border border-[#0F67B1]">
                                    <span
                                        class="bg-gradient-to-tl {{ $waiting->status === 'selesai'
                                            ? 'from-green-600 to-lime-400'
                                            : ($waiting->status === 'belum selesai'
                                                ? 'from-red-500 to-black'
                                                : ($waiting->status === 'dalam antrian'
                                                    ? 'from-slate-600 to-slate-950'
                                                    : ($waiting->status === 'sedang proses'
                                                        ? 'from-slate-600 to-slate-950'
                                                        : ''))) }} text-white px-3 py-1 rounded-full text-sm md:text-base whitespace-nowrap">
                                        {{ ucfirst($waiting->status) }}
                                    </span>
                                </td>

                                <td class="px-4 py-2 border border-[#0F67B1]">{{ ucfirst($waiting->jenis_layanan) }}
                                </td>
                                <td class="px-4 py-2 border border-[#0F67B1]">
                                    {{ Carbon::parse($waiting->start_date)->format('d/m/Y') }}</td>
                                <td class="px-4 py-2 border border-[#0F67B1]">
                                    {{ Carbon::parse($waiting->end_date)->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach

                        @if ($waitings->isEmpty())
                            <tr>
                                <td class="px-4 py-2 border border-[#0F67B1; text-center" colspan="8">Tidak ada data
                                    tersedia</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>


        </div>

        <!-- Footer Section -->
        <footer class="bg-[#96C9F4] text-black font-semibold py-4">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
                <!-- Logo -->
                <div class="flex justify-center md:justify-start items-center">
                    <img src="{{ asset('assets/img/logo yuma laundry.png') }}" alt="Yuma Laundry Logo" class="h-20">
                </div>
                <!-- Contact Info -->
                <div class="text-left text-[14px] md:text-[16px]">
                    <h3 class="font-semibold text-lg text-[16px] md:text-[18px]">Hubungi Kami</h3>

                    <div class="flex items-center space-x-2">
                        <i class="fa fa-home text-xl"></i>
                        <span>Jl. Artzimar III No.24, RW.09, Tegal Gundil, Bogor</span>
                    </div>


                    <div class="flex items-center space-x-2">
                        <i class='bx bxs-time text-xl'></i>
                        <p>08:00-18:00 WIB</p>
                    </div>

                    <div class="flex items-center space-x-2">
                        <i class='bx bxs-phone text-xl'></i>
                        <p>081809591059</p>
                    </div>

                    <div class="flex items-center space-x-2">
                        <i class='bx bx-envelope text-xl'></i>
                        <p>evnwev</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright -->
        <div class="bg-[#0F67B1] p-4 text-white text-center py-2 font-semibold text-[14px] md:text-[16px]">
            <p>Hak cipta 2024-2025 Yuma Laundry. Website by Numeros Team.</p>
        </div>
    </div>

    <!-- js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
