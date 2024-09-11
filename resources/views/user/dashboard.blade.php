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
    </head>
    <body>
        <div class="container">
            <h1>Product Catalog</h1>
            
            <div class="product-grid">
                <!-- Card 1 -->
                @foreach ($produk as $row )
                <div class="product-card">
                    <img   src="{{ asset('img/' . $row->gambar) }}" alt="" width="100" height="100">
                    <h2 class="product-name">{{ $row->nama }}</h2>
                    <h3 class="product-name">{{ $row->brand->name }}</h3>
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
