<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Waiting</title>
    <link rel="stylesheet" href="{{ asset('asset/css/create/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Edit Data Waiting</h1>
            <form action="{{ route('waitings.update', $waiting->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                <label for="nama_pelanggan">Nama Pelanggan:</label><br>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="{{ $waiting->nama_pelanggan }}" required><br>

                <label for="nama_barang">Nama Barang:</label><br>
                <input type="text" id="nama_barang" name="nama_barang" value="{{ $waiting->nama_barang }}" required><br>

                <label for="kuantitas_barang">Kuantitas Barang:</label><br>
                <input type="text" id="kuantitas_barang" name="kuantitas_barang" value="{{ $waiting->kuantitas_barang }}" required><br>

                <label for="status">Status:</label><br>
                <select name="status" id="status" required>
                    <option value="selesai" {{ $waiting->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="belum selesai" {{ $waiting->status == 'belum selesai' ? 'selected' : '' }}>Belum Selesai</option>
                    <option value="dalam antrian" {{ $waiting->status == 'dalam antrian' ? 'selected' : '' }}>Dalam Antrian</option>
                    <option value="sedang proses" {{ $waiting->status == 'sedang proses' ? 'selected' : '' }}>Sedang Proses</option>
                </select><br>

                <label for="jenis_layanan">Jenis Layanan:</label><br>
                <select name="jenis_layanan" id="jenis_layanan" required>
                    <option value="regular" {{ $waiting->jenis_layanan == 'regular' ? 'selected' : '' }}>Regular</option>
                    <option value="express" {{ $waiting->jenis_layanan == 'express' ? 'selected' : '' }}>Express</option>
                </select><br>

                <label for="start_date">Tanggal Mulai:</label><br>
                <input type="date" id="start_date" name="start_date" value="{{ $waiting->start_date }}" required><br>

                <label for="end_date">Tanggal Selesai:</label><br>
                <input type="date" id="end_date" name="end_date" value="{{ $waiting->end_date }}" required><br>

                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
