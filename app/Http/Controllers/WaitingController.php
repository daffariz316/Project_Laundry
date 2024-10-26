<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Waiting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaitingController extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Ambil data biaya dari database berdasarkan rentang tanggal jika tersedia
        if ($startDate && $endDate) {
            $waiting = Waiting::whereBetween('date', [$startDate, $endDate])->get();
        } else {
            // Jika rentang tanggal tidak tersedia, ambil semua data biaya
            $waiting = Waiting::all();
        }

        return view('admin.waiting', ['waiting' => $waiting]);
    }

    public function create()
    {
        return view('admin.create-w');
    }
    public function store(Request $request)
{
    // Validasi data input
    $request->validate([
        'nama_pelanggan' => 'required|string|max:255',
        'nama_barang' => 'required|string|max:255',
        'kuantitas_barang' => 'required|string|max:255',
        'status' => 'required|in:selesai,belum selesai,dalam antrian,sedang proses',
        'jenis_layanan' => 'required|in:regular,express',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date', // Pastikan end_date setelah start_date
    ]);

    // Simpan data ke dalam tabel waitings
    $waiting = new Waiting();
    $waiting->nama_pelanggan = $request->nama_pelanggan;
    $waiting->nama_barang = $request->nama_barang;
    $waiting->kuantitas_barang = $request->kuantitas_barang;
    $waiting->status = $request->status;
    $waiting->jenis_layanan = $request->jenis_layanan;
    $waiting->start_date = $request->start_date;
    $waiting->end_date = $request->end_date;
    $waiting->save();

    // Redirect ke halaman lain setelah menyimpan data
    return redirect()->route('waiting.index')->with('success', 'Data berhasil disimpan!');
}

public function edit($id)
{
    $waiting = Waiting::findOrFail($id); // Mengambil data berdasarkan ID
    return view('admin.edit-w', compact('waiting')); // Pastikan untuk menyesuaikan nama view
}

public function update(Request $request, $id)
{
    // Validasi data input
    $request->validate([
        'nama_pelanggan' => 'required|string|max:255',
        'nama_barang' => 'required|string|max:255',
        'kuantitas_barang' => 'required|string|max:255',
        'status' => 'required|in:selesai,belum selesai,dalam antrian,sedang proses',
        'jenis_layanan' => 'required|in:regular,express',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    // Mengambil data yang ingin diupdate
    $waiting = Waiting::findOrFail($id);

    // Memperbarui data
    $waiting->nama_pelanggan = $request->nama_pelanggan;
    $waiting->nama_barang = $request->nama_barang;
    $waiting->kuantitas_barang = $request->kuantitas_barang;
    $waiting->status = $request->status;
    $waiting->jenis_layanan = $request->jenis_layanan;
    $waiting->start_date = $request->start_date;
    $waiting->end_date = $request->end_date;
    $waiting->save();

    // Redirect setelah update
    return redirect()->route('waiting.index')->with('success', 'Data berhasil diperbarui!');
}

public function destroy($id)
{
    $waiting = Waiting::findOrFail($id); // Mengambil data berdasarkan ID
    $waiting->delete(); // Menghapus data

    // Redirect setelah delete
    return redirect()->route('waiting.index')->with('success', 'Data berhasil dihapus!');
}

// public function loadData()
//     {
//         // Ambil semua data dari tabel 'waitings'
//         $waitings = Waiting::all();

//         // Kirim data ke view admin.dashboard
//         return view('admin.dashboard', ['waitings' => $waitings]);
//     }
public function search(Request $request)
{
    $search = $request->input('search');

    // Query untuk mencari berdasarkan nama pelanggan atau jenis layanan
    $waitings = DB::table('waitings')
                ->where('nama_pelanggan', 'like', "%{$search}%")
                ->orWhere('jenis_layanan', 'like', "%{$search}%")
                ->get();

    $user_c = User::count(); // Menghitung jumlah user

    return view('admin.dashboard', [
        'waitings' => $waitings,
        'user_c' => $user_c // Kirimkan jumlah user ke view
    ]);
}
public function search_w(Request $request){
// Ambil semua data atau berdasarkan pencarian
$query = Waiting::query();

if ($request->has('search')) {
    $searchTerm = $request->input('search');
    $query->where('nama_pelanggan', 'like', '%' . $searchTerm . '%')
          ->orWhere('jenis_layanan', 'like', '%' . $searchTerm . '%')
          ->orWhere('status', 'like', '%' . $searchTerm . '%');
}

$waitings = $query->get();

return view('admin.waiting', ['waiting' => $waitings]);
}

public function showWaitings()
    {
        // Ambil semua data dari tabel waitings
        $waitings = Waiting::all();

        // Kirim data ke view dengan cara yang diinginkan
        return view('user.antrian', [
            'waitings' => $waitings
        ]);
    }
}
