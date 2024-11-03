<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Waiting</title>
    <link rel="stylesheet" href="{{ asset('asset/css/create/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center items-center min-h-screen m-0 bg-sky-300">
    <div class="w-3/4 p-5 ">
            <h1 class="text-center text-2xl mb-5">Edit Data Waiting</h1>
            <form action="{{ route('waitings.update', $waiting->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                <label for="nama_pelanggan" class="text-base mb-1 block">Nama Pelanggan:</label><br>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="{{ $waiting->nama_pelanggan }}" required class="w-full p-2 mb-3 border border-gray-300 rounded">

                <label for="nama_barang" class="text-base mb-1 block">Nama Barang:</label><br>
                <input type="text" id="nama_barang" name="nama_barang" value="{{ $waiting->nama_barang }}" required class="w-full p-2 mb-3 border border-gray-300 rounded"><br>

                <label for="kuantitas_barang" class="text-base mb-1 block">Kuantitas Barang:</label><br>
                <input type="text" id="kuantitas_barang" name="kuantitas_barang" value="{{ $waiting->kuantitas_barang }}" required class="w-full p-2 mb-3 border border-gray-300 rounded"><br>

                <label for="status"class="text-base mb-1 block">Status:</label><br>
                <select name="status" id="status" required class="w-full p-2 mb-3 border border-gray-300 rounded">
                    <option value="selesai" {{ $waiting->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="belum selesai" {{ $waiting->status == 'belum selesai' ? 'selected' : '' }}>Belum Selesai</option>
                    <option value="dalam antrian" {{ $waiting->status == 'dalam antrian' ? 'selected' : '' }}>Dalam Antrian</option>
                    <option value="sedang proses" {{ $waiting->status == 'sedang proses' ? 'selected' : '' }}>Sedang Proses</option>
                </select><br>

                <label for="jenis_layanan"  class="text-base mb-1 block">Jenis Layanan:</label><br>
                <select name="jenis_layanan" id="jenis_layanan" required class="w-full p-2 mb-3 border border-gray-300 rounded">
                    <option value="regular" {{ $waiting->jenis_layanan == 'regular' ? 'selected' : '' }}>Regular</option>
                    <option value="express" {{ $waiting->jenis_layanan == 'express' ? 'selected' : '' }}>Express</option>
                </select><br>

                <div class="flex gap-2 mb-3">
                    <div class="flex-1">
                        <label for="start_date">Tanggal Mulai:</label><br>
                        <input type="date" id="start_date" name="start_date" value="{{ $waiting->start_date }}" required><br>
                    </div>
                    <div class="flex-1">
                        <label for="end_date">Tanggal Selesai:</label><br>
                        <input type="date" id="end_date" name="end_date" value="{{ $waiting->end_date }}" required><br>
                    </div>
                </div>

                <button type="submit" class="w-full p-2 bg-green-500 text-white text-base rounded cursor-pointer hover:bg-green-600">Update</button>
            </form>
    </div>
    <script>
         const start_date = document.getElementById("start_date");
        const end_date = document.getElementById("end_date");

        start_date.addEventListener("change", function () {
            end_date.min = start_date.value;
        });
    </script>
</body>
</html>
