{{-- alert if success --}}
@if (session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
@endif

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Cards</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <style>
            .top-right-link {
                position: absolute;
                top: 20px;
                right: 20px;
                text-decoration: none;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
            }
            .top-right-link:hover {
                background-color: #45a049;
            }
            body{
                background-color: #ECDFCC;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!-- Top-right link -->
            <a href="/order" class="top-right-link">Keranjang</a>

            <h1>Product Catalog</h1>

            <!-- Search Form -->
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Search products..." required>
                <button type="submit">Search</button>
                <a style="text-decoration: none" href="/user/dashboard">Refresh</a>
            </form>
            
            <div class="product-grid">
                <!-- Product Cards -->
                @foreach ($produk as $row)
                <div class="product-card">
                    <img src="{{ asset('img/' . $row->gambar) }}" alt="" width="100" height="100">
                    <h2 class="product-name">{{ $row->nama }}</h2>
                    <h3 class="product-brand">{{ $row->brand->name }}</h3>
                    <p class="product-description">{{ $row->deskripsi }}</p>
                    <p class="product-price">{{ $row->harga }}</p>
                  
                    <a href="/order/{{ $row->id }}" class="btn-buy">Buy Now</a>
                    <a href="/review/{{ $row->id }}" class="btn-review">Review Now</a>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
