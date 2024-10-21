<?php

namespace App\Http\Controllers;

use App\Models\Waiting;
use Illuminate\Http\Request;
use App\Models\Waitng;

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

        return view('Admin.waiting', ['waiting' => $waiting]);
    }
}
