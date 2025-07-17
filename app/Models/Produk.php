<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
    'id_produk',
    'nama_produk',
    'jenis_produk',
    'harga',
    'stok',
    'tanggal_kadaluwarsa',
    'deskripsi_produk'
];

}
