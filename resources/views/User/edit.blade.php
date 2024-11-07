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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- jonsuh -->
    <link rel="stylesheet" href="{{asset('assets/css/hamburgers.css')}}">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/output.css')}}">
</head>
<body class="bg-[#F7FEFF] ">
    <!-- Navbar -->
    <div class="navbar sticky top-0 z-50 px-4 py-3 bg-[#F7FEFF] duration-300" id="navbar">
        <div class="mx-auto">
            <div class="navbar-box flex items-center justify-between">
                <div class="logo flex items-center">
                    <img src="{{asset('assets/img/logo yuma laundry.png')}}" alt="logo" class="md:w-40 w-24 h-auto">
                </div>

                <ul class="menu md:flex gap-x-7 items-center font-semibold flex-col md:flex-row md:static absolute z-10 top-24 left-0
                        md:bg-transparent bg-[#F7FEFF] md:w-auto w-full text-[16px] md:text-[18px]">
                        <li class="py-2 w-full text-center">
                            <a href="{{route('user.dashboard-u')}}" class="hover:text-[#0F67B1]">Beranda</a>
                        </li>
                        <li class="py-2 w-full text-center">
                            <a href="{{route('user.servis')}}" class="hover:text-[#0F67B1]">Servis</a>
                        </li>
                        <li class="py-2 w-full text-center">
                            <a href="{{url('user/antrian')}}" class="hover:text-[#0F67B1]">Antrian</a>
                        </li>
                    <li class="opacity-50 md:block hidden">|</li>
                    <li class="py-2 w-full text-center">
                        @guest
                            <a href="{{ route('user.login') }}">
                                <button class="hover:text-[#0F67B1] md:hover:text-[#0F67B1] bg-[#96C9F4] text-white px-4 py-2 rounded-lg md:bg-[#96C9F4] md:text-white">
                                    Masuk
                                </button>
                            </a>
                        @else
                            <a href="{{route('user.profile')}}">
                                <i class='bx bxs-user-circle cursor-pointer text-[40px] md:text-[100px] lg:text-[40px] hover:text-[#0F67B1]'></i>
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

    <!-- Form Section -->
    <section class="w-full mx-auto mt-10 mb-10 relative flex flex-col md:flex-row items-center">
        <!-- Left Column (Image) -->
        <div class="flex-shrink-0 relative hidden md:block" data-aos="fade-right" data-aos-duration="1500">
            <div class="w-80 h-120 bg-[#F7FEFF]">
                <img src="{{asset('assets/img/Group 44.png')}}" alt="Profile" class="w-full h-full object-cover" />
            </div>
        </div>

        <!-- Right Column (Form) -->
        <div class="w-full md:flex-grow md:pl-12 px-4" data-aos="fade-left" data-aos-duration="1500">
            <form class="space-y-6 bg-[#B3DAF7] p-6 rounded-lg shadow-md md:max-w-[80%] max-w-lg mx-auto" action="{{ route('user.update') }}" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-black">Username</label>
                    <input type="text" id="username" name="username" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required value="{{ old('username', $user->username) }}">
                </div>

                <div>
                    <label for="phone_number" class="block text-sm font-medium text-black">No. Telepon</label>
                    <input type="text" id="phone_number" name="phone_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required value="{{ old('phone_number', $user->phone_number) }}">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-black">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required value="{{ old('email', $user->email) }}">
                </div>

                <div class="mb-3">
                    <label for="password" class="block text-sm font-medium text-black">Password Baru</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="block text-sm font-medium text-black">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div class="flex flex-col space-y-4 md:flex-row md:justify-between md:space-y-0">
                    <button type="button"
                            class="bg-[#0F67B1] hover:bg-[#F7FEFF] hover:text-black text-white px-4 py-2 rounded-md w-full md:w-auto"
                            onclick="window.location.href='{{ route('user.dashboard-u') }}'"> Kembali
                    </button>

                    <div class="flex space-x-4">
                        <button type="button"
                            class="bg-[#0F67B1] hover:bg-[#F7FEFF] hover:text-black text-white px-4 py-2 rounded-md w-full md:w-auto"
                            onclick="window.location.href='{{ route('user.profile') }}'"> Batal
                        </button>
                        <button type="submit" class="bg-[#0F67B1] hover:bg-[#F7FEFF] hover:text-black text-white px-4 py-2 rounded-md w-full md:w-auto">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-[#96C9F4] text-black font-semibold py-4">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
            <!-- Logo -->
            <div class="flex justify-center md:justify-start items-center">
                <img src="{{asset('assets/img/logo yuma laundry.png')}}" alt="Logo" class="h-20" />
            </div>

            <!-- Links -->
            <div class="flex flex-col justify-center items-center md:items-start">
                <h4 class="text-lg">Sosial Media</h4>
                <div class="flex space-x-4 mt-2">
                    <a href="#" class="text-black hover:text-[#0F67B1]"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-black hover:text-[#0F67B1]"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-black hover:text-[#0F67B1]"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <p class="text-center mt-4">© 2024 Yuma Laundry. All rights reserved.</p>
    </footer>

    <!-- Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
