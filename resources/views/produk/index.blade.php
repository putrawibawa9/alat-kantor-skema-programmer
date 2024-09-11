@extends('layouts.main')
    @section('content')
    <div class="container">
        <h1>Tabel Produk</h1>
        <a  href="/produk/create">Tambah Produk</a>
        <a  href="/brand/create">Tambah Brand</a>
        <a  href="/admin/order"> Pesanan</a>
        <a  href="/admin/review"> Review</a>

        <br>
        <table id="pengaduanTable">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $item)
                    
                <tr>
                    <td>{{ $item->brand->name }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td><img   src="{{ asset('img/' . $item->gambar) }}" alt="" width="100" height="100"></td>
                    <td><a href="/produk/{{ $item->id }}" class="edit-btn">Edit</a></td>
                    <td> <form action="{{ url('produk/' . $item->id) }}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" 
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                style="padding: 8px 12px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Hapus
        </button>
    </form></td>
                </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
       <a href="/" style="background-color: red; text-decoration: none; font-weight: bold; padding: 5px 10px; border: 1px solid red; border-radius: 5px;">Logout</a>
    </div>
    @endsection
