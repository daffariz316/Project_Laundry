<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Waiting</title>
    <link rel="stylesheet" href="{{ asset('asset/css/create/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Tambah Data Waiting</h1>
            <form action="{{ route('waitings.store') }}" method="POST">
                @csrf

                <label for="nama_pelanggan">Nama Pelanggan:</label><br>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" required><br>

                <label for="nama_barang">Nama Barang:</label><br>
                <input type="text" id="nama_barang" name="nama_barang" required><br>

                <label for="kuantitas_barang">Kuantitas Barang:</label><br>
                <input type="text" id="kuantitas_barang" name="kuantitas_barang" required><br>

                <label for="status">Status:</label><br>
                <select name="status" id="status" required>
                    <option value="selesai">Selesai</option>
                    <option value="belum selesai">Belum Selesai</option>
                    <option value="dalam antrian">Dalam Antrian</option>
                    <option value="sedang proses">Sedang Proses</option>
                </select><br>

                <label for="jenis_layanan">Jenis Layanan:</label><br>
                <select name="jenis_layanan" id="jenis_layanan" required>
                    <option value="regular">Regular</option>
                    <option value="express">Express</option>
                </select><br>

                <label for="start_date">Tanggal Mulai:</label><br>
                <input type="date" id="start_date" name="start_date" required><br>

                <label for="end_date">Tanggal Selesai:</label><br>
                <input type="date" id="end_date" name="end_date" required><br>

                <button type="submit" id="create-Waiting">Simpan</button>
            </form>
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script> --}}
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
    </script>
</body>
</html>
