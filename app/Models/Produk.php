<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'gambar',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
