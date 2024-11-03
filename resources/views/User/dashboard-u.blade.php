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
    <link rel="shortcut icon" href="{{ asset('assets/img/yuma.png') }}" type="image/x-icon">
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

<body class="bg-[#F7FEFF]">
    <!-- navbar  -->
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
                        <a href="{{ route('user.dashboard-u') }}"
                            class="hover:text-[#0F67B1] text-[#0F67B1]">Beranda</a>
                    </li>
                    <li class="py-2 w-full text-center">
                        <a href="{{ route('user.servis') }}" class="hover:text-[#0F67B1]">Servis</a>
                    </li>
                    <li class="py-2 w-full text-center">
                        @auth
                            <a href="{{ url('user/antrian') }}" class="hover:text-[#0F67B1]">Antrian</a>
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
        <!-- Hero Section -->
        <section class="bg-[#F7FEFF]" id="content">
            <div class=" mx-auto flex flex-col md:flex-row items-start justify-between font-medium">
                <!-- Text Section -->
                <div class="md:w-1/2 space-y-4 px-4 md:pt-10 mb-10 text-[14px] md:text-[16px]" data-aos="fade-right"
                    data-aos-duration="1500">
                    <h1 class="text-4xl font-bold text-black text-[24px] md:text-[36px]">Cuci Hari Ini, Tampil Percaya
                        Diri</h1>
                    <p class="text-black">Yuma Laundry didirikan pada tahun 2018 di Malabar dan saat ini berlokasi di
                        Artzimar 1. Awalnya menargetkan mahasiswa, usaha ini kini berfokus pada pelayanan rumah tangga,
                        khususnya untuk perlengkapan bayi, serta menjalin kerja sama dengan klinik kecantikan.</p>
                    <div class="bg-[#0F67B1] text-white py-2 px-4 inline-block rounded-full">
                        Solusi Tepat untuk Perlengkapan Bayi dan Rumah Tangga
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-1/2">
                            <p class="text-2xl font-bold">4049</p>
                            <p class="text-[#0F67B1]">Pengunjung Yuma Laundry dari Februari 2024 sampai Oktober 2024</p>
                        </div>
                        <div class="w-1/2">
                            <p class="text-2xl font-bold">6Th</p>
                            <p class="text-[#0F67B1]">Sudah berdiri sejak tahun 2018 </p>
                        </div>
                    </div>
                    <div class="space-x-4 mt-4">
                        <a href="https://wa.me/6281809591059"
                            class="bg-[#0F67B1] text-white py-2 px-4 rounded-lg hover:bg-[#3FA2F6]">Hubungi Kami</a>
                        <a href="{{ route('user.servis') }}"
                            class="bg-[#0F67B1] text-white py-2 px-4 rounded-lg hover:bg-[#3FA2F6]">Layanan Kami</a>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="md:w-1/2 flex justify-end -mt-3" data-aos="fade-left" data-aos-duration="1500">
                    <img src="{{ asset('assets/img/Group_34.png') }}" alt="Mesin Cuci"
                        class="max-w-[350px] w-auto hidden md:block"> <!-- Menggunakan kelas hidden dan md:block -->
                </div>

            </div>
        </section>

        <!-- Katalog Section -->
        <section class="bg-[#96C9F4] py-7">
            <div class="container mx-auto text-center px-4">
                <h2 class="text-3xl font-bold mb-8 text-black text-[24px] md:text-[36px]">Daftar Barang yang Dapat
                    Dicuci</h2>
                <div class="flex flex-col md:flex-row items-center gap-16 justify-center">
                    <!-- Katalog 1 -->
                    <div class="bg-white rounded-lg shadow-lg p-4 max-w-xs w-full" data-aos="zoom-in-right"
                        data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                        <h3 class="text-blue-500 font-semibold">KATALOG 1</h3>
                        <p class="text-black font-bold">Perlengkapan Bayi</p>
                        <div class="mt-4">
                            <a href="{{ route('user.servis') }}">
                                <img src="{{ asset('assets/img/perlengkapan bayi.jpg') }}" alt="Perlengkapan Bayi"
                                    class="rounded-lg w-full h-auto object-cover">
                            </a>
                        </div>
                    </div>
                    <!-- Katalog 2 -->
                    <div class="bg-white rounded-lg shadow-lg p-4 max-w-xs w-full" data-aos="zoom-in-left"
                        data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                        <h3 class="text-blue-500 font-semibold">KATALOG 2</h3>
                        <p class="text-black font-bold">Perlengkapan Rumah Tangga</p>
                        <div class="mt-4">
                            <a href="{{ route('user.servis') }}#Perlengkapan-Rumah-Tangga">
                                <img src="{{ asset('assets/img/perlengkapan r.tangga.jpg') }}"
                                    alt="Perlengkapan Rumah Tangga" class="rounded-lg w-full h-auto object-cover">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- box section -->
        <section class="bg-[#F7FEFF] py-7">
            <div class="container mx-auto text-center p-4">
                <h2 class="text-3xl font-bold mb-8 text-blacktext text-[24px] md:text-[36px]">Mengapa Memilih Yuma
                    Laundry</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Box 1: Detergen Unggulan -->
                    <div class="bg-[#D9D9D9] p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-delay="200" data-aos-anchor-placement="center-bottom">
                        <h3 class="text-xl font-semibold text-black mb-4">Detergen Unggulan</h3>
                        <p class="text-gray-700">Kami menggunakan detergen yang lebih ramah lingkungan berbahan dasar
                            Methyl Esther Sulfonate (MES) yang berasal dari bahan nabati namun memiliki daya ampuh yang
                            efektif mengangkat kotoran membandel pada pakaian.</p>
                    </div>
                    <!-- Box 2: Layanan Lengkap -->
                    <div class="bg-[#D9D9D9] p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-delay="300" data-aos-anchor-placement="center-bottom">
                        <h3 class="text-xl font-semibold text-black mb-4">Layanan Lengkap</h3>
                        <p class="text-gray-700">Berbagai jenis layanan kami sediakan sesuai dengan kebutuhan
                            pelanggan: Regular Ekonomis, Paket Exclusive, Laundry Khusus Pakaian Bayi, Laundry Batik,
                            Laundry Bed Cover, Laundry Sepatu, Cuci Karpet dan Boneka serta berbagai layanan lainnya.
                        </p>
                    </div>
                    <!-- Box 3: Garansi 100% Puas -->
                    <div class="bg-[#D9D9D9] p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="2000"
                        data-aos-delay="400" data-aos-anchor-placement="center-bottom">
                        <h3 class="text-xl font-semibold text-black mb-4">Garansi 100% Puas</h3>
                        <p class="text-gray-700">Kami memberikan jaminan kepuasan kepada para pelanggan dan jika
                            pelanggan tidak merasa puas dengan hasil proses kami, kami akan mengulang proses TANPA BIAYA
                            TAMBAHAN.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- owner section -->
        <section class="bg-[#96C9F4] py-7">
            <div class="container mx-auto  p-4">
                <h2 class="text-3xl text-center font-bold mb-4 text-black text-[24px] md:text-[36px]">Mengenal Pemilik
                    Yuma Laundry</h2>
                <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">

                    <!-- Gambar Pemilik -->
                    <div class="md:w-1/3 flex justify-center" data-aos="flip-left" data-aos-duration="1500"
                        data-aos-anchor-placement="center-bottom">
                        <img src="{{ asset('assets/img/foto kak iqbal.png') }}" alt="Pemilik Yuma Laundry"
                            class="rounded-full w-50 h-50 object-cover">
                    </div>
                    <!-- Teks Pengantar -->
                    <div class="md:w-2/3 -mb-2 md:mb-0 mt-4 md:mt-0 px-4">
                        <!-- Menggunakan flexbox untuk menempatkan box secara horizontal -->
                        <div class="flex space-x-4">
                            <!-- Box pertama -->
                            <div class="bg-gray-100 p-4 rounded-lg w-1/2" data-aos="fade-right"
                                data-aos-duration="1500" data-aos-delay="600"
                                data-aos-anchor-placement="center-bottom">
                                <h3 class="text-lg font-bold mb-2">Profil Singkat</h3>
                                <p class="text-black">
                                    Iqbal adalah mahasiswa lulusan Ekonomi IPB angkatan 46, lahir tahun 1991 dan
                                    sekarang berusia 28 tahun. Ia memulai usaha di Malabar pada tahun 2018 dan kini
                                    berlokasi di Artzimar 1. Awalnya, usaha ini menargetkan mahasiswa sebagai pelanggan,
                                    namun sekarang lebih fokus ke kebutuhan rumah tangga, terutama perlengkapan bayi,
                                    dan juga bekerja sama sebagai vendor dengan klinik kecantikan.
                                </p>
                            </div>

                            <!-- Box kedua -->
                            <div class="bg-gray-100 p-4 rounded-lg w-1/2" data-aos="fade-right"
                                data-aos-duration="1500" data-aos-delay="200"
                                data-aos-anchor-placement="center-bottom">
                                <h3 class="text-lg font-bold mb-2">Keunggulan Usaha</h3>
                                <p class="text-black">
                                    Keunggulan usaha Iqbal terletak pada perhatian terhadap barang konsumen, seperti
                                    mendokumentasikan cucian sebelum diproses dan menawarkan harga yang seimbang dengan
                                    kualitas layanan. Untuk memasarkan produk, Instagram Reels dan WhatsApp Business
                                    menjadi platform utama. Meskipun begitu, proses administrasi masih menggunakan nota
                                    manual dan belum beralih ke sistem kasir digital.
                                </p>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section class="bg-[#F7FEFF] flex flex-col items-center py-7 px-4 md:px-0">
            <h1 class="text-3xl font-bold mb-6 text-[24px] md:text-[36px]">Lokasi Yuma Laundry</h1>

            <!-- Map -->
            <div class="w-full max-w-4xl p-4 md:p-0 rounded-lg">
                <iframe class="w-full h-96 border-0 rounded-lg"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.488782535089!2d106.81033527453607!3d-6.58600126438035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d1db517fab%3A0x630f26eae711c5!2sYuma%20Laundry%20(Laundry%20di%20Bogor)!5e0!3m2!1sid!2sid!4v1729898646534!5m2!1sid!2sid"
                    style="border: 1px solid gray;"></iframe>

            </div>
        </section>


        <!-- Footer Section -->
        <footer class="bg-[#96C9F4] text-black font-semibold py-4">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
                <!-- Logo -->
                <div class="flex justify-center md:justify-start items-center">
                    <img src="{{ asset('assets/img/logo yuma laundry.png') }}" alt="Yuma Laundry Logo"
                        class="h-20">
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
                        <p>yumacorpo@gmail.com</p>
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
