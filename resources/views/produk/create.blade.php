@extends('layouts.main')
@section('content')
    <div class="form-container">
        <h1>Tambah Produk Baru</h1>
        <form action="/produk" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            
          
            
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" id="stok" name="stok" required>
            </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" required>
            </div>
            
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required>
            </div>
            
            <div class="form-group">
                <button type="submit" class="add-btn">Tambah Product</button>
            </div>
        </form>
    </div>
@endsection
