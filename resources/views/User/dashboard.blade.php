<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Yuma Laundry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <!-- Header -->
    <header class="bg-[#F7FEFF] py-4 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="./assets/img/logo yuma laundry.png" alt="Logo Yuma Laundry" class="w-35 h-20">
            </div>
            <nav class="space-x-6 text-black font-semibold">
                <a href="#" class="hover:text-blue-500">Beranda</a>
                <a href="#" class="hover:text-blue-500">Servis</a>
                <a href="#" class="hover:text-blue-500">Antrian</a>
                <a href="#" class="hover:text-blue-500">Rawatan</a>
                <a href="route('login')" class="hover:text-blue-500">Masuk</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-[#F7FEFF] ">
        <div class="container mx-auto flex flex-col md:flex-row items-start justify-between font-medium">
            <!-- Text Section -->
            <div class="md:w-1/2 space-y-4 px-4 pt-10">
                <h1 class="text-4xl font-bold text-black">Cuci Hari Ini, Tampil Percaya Diri</h1>
                <p class="text-black">Yuma Laundry didirikan pada tahun 2018 di Malabar dan saat ini berlokasi di
                    Artzimar 1. Awalnya menargetkan mahasiswa, usaha ini kini berfokus pada pelayanan rumah tangga,
                    khususnya untuk perlengkapan bayi, serta menjalin kerja sama dengan klinik kecantikan.</p>
                <div class="bg-[#0F67B1] text-white py-2 px-4 inline-block rounded-full">
                    Solusi Tepat untuk Perlengkapan Bayi dan Rumah Tangga
                </div>
                <div class="flex items-center space-x-4">
                    <div>
                        <p class="text-2xl font-bold">???</p>
                        <p class="text-[#0F67B1]">Pengunjung telah merasakan layanan di Yuma Laundry</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold">6Th</p>
                        <p class="text-[#0F67B1]">Sudah berdiri sejak tahun 2018</p>
                    </div>
                </div>
                <div class="space-x-4 mt-4">
                    <a href="#" class="bg-[#0F67B1] text-white py-2 px-4 rounded-lg hover:bg-[#3FA2F6]">Hubungi
                        Kami</a>
                    <a href="#" class="bg-[#0F67B1] text-white py-2 px-4 rounded-lg hover:bg-[#3FA2F6]">Layanan
                        Kami</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="md:w-1/2 flex justify-end -mt-10">
                <img src="./assets/img/Group 34.png" alt="Mesin Cuci" class="w-full md:w-3/5">
            </div>
        </div>
    </section>

    <!-- Katalog Section -->
    <section class="bg-[#96C9F4] py-7">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-8 text-black">Daftar Barang yang Dapat Dicuci</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
                <!-- Katalog 1 -->
                <div class="bg-white rounded-lg shadow-lg p-4 max-w-sm mx-auto">
                    <h3 class="text-blue-500 font-semibold">KATALOG 1</h3>
                    <p class="text-black font-bold">Perlengkapan Bayi</p>
                    <div class="mt-4">
                        <a href="#">
                            <img src="./assets/img/perlengkapan bayi.jpg" alt="Perlengkapan Bayi" class="rounded-lg">
                        </a>
                    </div>
                </div>
                <!-- Katalog 2 -->
                <div class="bg-white rounded-lg shadow-lg p-4 max-w-sm mx-auto">
                    <h3 class="text-blue-500 font-semibold">KATALOG 2</h3>
                    <p class="text-black font-bold">Perlengkapan Rumah Tangga</p>
                    <div class="mt-4">
                        <a href="#">
                            <img src="./assets/img/perlengkapan r.tangga.jpg" alt="Perlengkapan Rumah Tangga"
                                class="rounded-lg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F7FEFF] py-7">
        <div class="container mx-auto text-center p-4">
            <h2 class="text-3xl font-bold mb-8 text-black">Mengapa Memilih Yuma Laundry</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Box 1: Detergen Unggulan -->
                <div class="bg-[#D9D9D9] p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-black mb-4">Detergen Unggulan</h3>
                    <p class="text-gray-700">Kami menggunakan detergen yang lebih ramah lingkungan berbahan dasar Methyl
                        Esther Sulfonate (MES) yang berasal dari bahan nabati namun memiliki daya ampuh yang efektif
                        mengangkat kotoran membandel pada pakaian.</p>
                </div>
                <!-- Box 2: Layanan Lengkap -->
                <div class="bg-[#D9D9D9] p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-black mb-4">Layanan Lengkap</h3>
                    <p class="text-gray-700">Berbagai jenis layanan kami sediakan sesuai dengan kebutuhan pelanggan:
                        Regular Ekonomis, Paket Exclusive, Laundry Khusus Pakaian Bayi, Laundry Batik, Laundry Bed
                        Cover, Laundry Sepatu, Cuci Karpet dan Boneka serta berbagai layanan lainnya.</p>
                </div>
                <!-- Box 3: Garansi 100% Puas -->
                <div class="bg-[#D9D9D9] p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-black mb-4">Garansi 100% Puas</h3>
                    <p class="text-gray-700">Kami memberikan jaminan kepuasan kepada para pelanggan dan jika pelanggan
                        tidak merasa puas dengan hasil proses kami, kami akan mengulang proses TANPA BIAYA TAMBAHAN.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#96C9F4] py-7">
        <div class="container mx-auto  p-4">
            <h2 class="text-3xl text-center font-bold mb-4 text-black">Mengenal Pemilik Yuma Laundry</h2>
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">

                <!-- Gambar Pemilik -->
                <div class="md:w-1/3 flex justify-center">
                    <img src="./assets/img/foto kak iqbal.png" alt="Pemilik Yuma Laundry"
                        class="rounded-full w-48 h-48 object-cover">
                </div>
                <!-- Teks Pengantar -->
                <div class="md:w-2/3 mb-8 md:mb-0 px-4">

                    <p class="text-black">Iqbal, lulusan Ekonomi IPB angkatan 46, lahir tahun 1996 dan kini berusia 28
                        tahun. Ia memulai usahanya pada 2018 di Malabar dan sekarang berlokasi di Artzimar 1. Awalnya
                        menargetkan mahasiswa, kini ia fokus pada rumah tangga, terutama dengan perlengkapan bayi, serta
                        bermitra dengan klinik kecantikan sebagai vendor. Keunggulan usahanya terletak pada perhatian
                        terhadap barang konsumen, seperti mendokumentasikan cucian sebelum diproses dan menawarkan harga
                        seimbang dengan kualitas. Ia aktif memasarkan melalui Instagram Reels dan WhatsApp Business,
                        meski masih menggunakan nota manual dan belum menerapkan kasir digital.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class=" bg-[#F7FEFF] flex flex-col items-center py-7">
        <h1 class="text-3xl font-bold mb-6">Lokasi Yuma Laundry</h1>

        <!-- Map -->
        <div class="w-full max-w-4xl">
            <iframe class="w-full h-96 border-0 rounded-lg"
                src="https://www.openstreetmap.org/export/embed.html?bbox=YOUR_MAP_BBOX_HERE"
                style="border: 1px solid gray;"></iframe>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-[#96C9F4] text-black font-semibold py-7">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
            <!-- Logo -->
            <div class="flex justify-center md:justify-start items-center">
                <img src="./assets/img/logo yuma laundry.png" alt="Yuma Laundry Logo" class="h-20">
            </div>
            <!-- Contact Info -->
            <div class="text-center md:text-left">
                <h3 class="font-semibold text-lg">Hubungi Kami</h3>

                <p class="flex items-center"><i class='bx bxs-home mr-2 text-xl'></i>Jl. Artzimar III No.24, RW.09,
                    Tegal Gundil, Bogor</p>

                <p class="flex items-center"><i class='bx bxs-time mr-2 text-xl'></i>08:00-18:00 WIB</p>

                <p class="flex items-center"><i class='bx bxs-phone mr-2 text-xl'></i>081809591059</p>

                <p class="flex items-center"><i class='bx bx-envelope mr-2 text-xl'></i>evnwev</p>
            </div>


        </div>
    </footer>

    <!-- Copyright -->
    <div class="bg-[#0F67B1] p-4 text-white text-center py-2 font-semibold">
        <p>Hak cipta 2024-2025 Yuma Laundry. Website by Numeros Team.</p>
    </div>

</body>

</html>
