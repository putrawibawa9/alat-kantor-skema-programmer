<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['produk_id', 'review'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
