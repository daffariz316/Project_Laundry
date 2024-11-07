<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Waiting</title>
    <link rel="stylesheet" href="{{ asset('asset/css/create/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center items-center min-h-screen m-0 bg-sky-300">
    <div class="w-96 p-5 border border-gray-300 rounded-lg bg-white shadow-lg">
        <h1 class="text-center text-2xl mb-5">Tambah Data Waiting</h1>
        <form action="{{ route('waitings.store') }}" method="POST">
            @csrf

            <label for="nama_pelanggan" class="text-base mb-1 block">Nama Pelanggan:</label>
            <input type="text" id="nama_pelanggan" name="nama_pelanggan" required class="w-full p-2 mb-3 border border-gray-300 rounded" />

            <label for="nama_barang" class="text-base mb-1 block">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" required class="w-full p-2 mb-3 border border-gray-300 rounded" />

            <label for="kuantitas_barang" class="text-base mb-1 block">Kuantitas Barang:</label>
            <input type="text" id="kuantitas_barang" name="kuantitas_barang" required class="w-full p-2 mb-3 border border-gray-300 rounded" />

            <label for="status" class="text-base mb-1 block">Status:</label>
            <select name="status" id="status" required class="w-full p-2 mb-3 border border-gray-300 rounded">
                <option value="selesai">Selesai</option>
                <option value="belum selesai">Belum Selesai</option>
                <option value="dalam antrian">Dalam Antrian</option>
                <option value="sedang proses">Sedang Proses</option>
            </select>

            <label for="jenis_layanan" class="text-base mb-1 block">Jenis Layanan:</label>
            <select name="jenis_layanan" id="jenis_layanan" required class="w-full p-2 mb-3 border border-gray-300 rounded">
                <option value="regular">Regular</option>
                <option value="express">Express</option>
            </select>

            <label for="start_date" class="text-base mb-1 block">Tanggal Mulai:</label>
            <input type="date" id="start_date" name="start_date" required class="w-full p-2 mb-3 border border-gray-300 rounded" />

            <label for="end_date" class="text-base mb-1 block">Tanggal Selesai:</label>
            <input type="date" id="end_date" name="end_date" required class="w-full p-2 mb-3 border border-gray-300 rounded" />

            <button type="submit" id="create-Waiting" class="w-full p-2 bg-green-500 text-white text-base rounded cursor-pointer hover:bg-green-600">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('create-Waiting').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah pengiriman form sebelum konfirmasi
            Swal.fire({
                title: "Konfirmasi",
                text: "Apakah Anda yakin ingin menambahkan data?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, Tambahkan!",
                cancelButtonText: "Tidak, Batalkan"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika dikonfirmasi, kirim form
                    event.target.form.submit();
                }
            });
        });

        const start_date = document.getElementById("start_date");
        const end_date = document.getElementById("end_date");

        start_date.addEventListener("change", function () {
            end_date.min = start_date.value;
        });
    </script>
</body>
</html>
