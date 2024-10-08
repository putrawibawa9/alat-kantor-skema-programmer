<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
       Produk::create([
            'nama' => 'Nike Air Max 90',
            'deskripsi' => 'Sepatu Nike Air Max 90',
            'harga' => 1500000,
            'stok' => 10,
            'gambar' => 'nike-air-max-90.jpg',
      
        ]);

        Produk::create([
            'nama' => 'Adidas Superstar',
            'deskripsi' => 'Sepatu Adidas Superstar',
            'harga' => 1200000,
            'stok' => 10,
            'gambar' => 'adidas-superstar.jpg',
  
        ]);

        Produk::create([
            'nama' => 'Supreme Hoodie',
            'deskripsi' => 'Hoodie Supreme',
            'harga' => 1000000,
            'stok' => 10,
            'gambar' => 'supreme-hoodie.jpg',
   
        ]);

    }
}
