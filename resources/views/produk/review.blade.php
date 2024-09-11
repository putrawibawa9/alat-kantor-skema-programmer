@extends('layouts.main')
    @section('content')
    <div class="container">
        <h1>Tabel Pesanan</h1>
      {{-- @dd($reviews) --}}
        <br>
        <table id="pengaduanTable">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $item)  
                <tr>
                    <td>{{ $item->produk->nama }}</td>
                    <td>{{ $item->review}}</td>
                  
                </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
       <a href="/" style="background-color: red; text-decoration: none; font-weight: bold; padding: 5px 10px; border: 1px solid red; border-radius: 5px;">Logout</a>
    </div>
    @endsection
