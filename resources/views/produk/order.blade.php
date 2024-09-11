@extends('layouts.main')
    @section('content')
    <div class="container">
        <h1>Tabel Pesanan</h1>
      {{-- @dd($orders) --}}
        <br>
        <table id="pengaduanTable">
            <thead>
                <tr>
                    <th>ID Pemesanan</th>
                    <th>Nama Produk</th>
                    <th>Brand</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Konfirmasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->produk->nama }}</td>
                    <td>{{ $item->produk->brand->name }}</td>
                    <td>{{ $item->produk->harga }}</td>
                    <td><img   src="{{ asset('img/' . $item->produk->gambar) }}" alt="" width="100" height="100"></td>
                    <td> <form action="{{ url('admin/order/confirm/' . $item->id) }}" method="post" style="display: inline;">
        @csrf
        <button type="submit" 
                onclick="return confirm('Apakah Anda yakin ingin menkonfirmasi order ini?')"
                style="padding: 8px 12px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Konfirmasi
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
