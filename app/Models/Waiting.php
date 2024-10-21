<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waiting extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelanggan',
        'nama_barang',
        'kuantitas_barang',
        'status',
        'jenis_layanan',
        'start_date',
        'end_date',
        // tambahkan _token ke dalam fillable
    ];
}
