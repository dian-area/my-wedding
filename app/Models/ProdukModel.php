<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table = 'produk_layanan';
    protected $fillable = [
        'judul_produk',
        'deskripsi_singkat_produk',
        'deskripsi_lengkap_produk',
        'tanggal_produk',
        'gambar_produk',
    ];
}
