@extends('layouts.main')
@section('content')
    <div class="form-container">
        <h1>Edit Produk</h1>
        <form action="/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input value="{{ $produk->nama }}" type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input value="{{ $produk->deskripsi }}" type="text" id="nama" name="deskripsi" required>
            </div>
            
            <div class="form-group">
                <label for="harga">Harga</label>
                <input value="{{ $produk->harga }}" type="number" id="harga" name="harga" required>
            </div>
            
            <div class="form-group">
                <label for="stok">Stok</label>
                <input value="{{ $produk->stok }}" type="number" id="stok" name="stok" required>
            </div>
            <td><img   src="{{ asset('img/' . $produk->gambar) }}" alt="" width="100" height="100"></td>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" >
            </div>
            
            <div class="form-group">
                <button type="submit" class="add-btn">Edit Product</button>
            </div>
        </form>
    </div>
@endsection
