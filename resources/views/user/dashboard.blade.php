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
    <title>Product Catalog</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 40px;
        }

        .top-right-link {
            position: absolute;
            top: 20px;
            right: 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .top-right-link:hover {
            background-color: #45a049;
        }

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        form input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #45a049;
        }

        form a {
            margin-left: 10px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        form a:hover {
            background-color: #0056b3;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            padding: 20px;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .product-name {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .product-description {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .quantity-input {
            margin-bottom: 15px;
            text-align: center;
        }

        .quantity-input input {
            width: 60px;
            padding: 5px;
            font-size: 16px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-buy,
        .btn-review {
            text-decoration: none;
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 5px;
        }

        .btn-buy:hover {
            background-color: #45a049;
        }

        .btn-review {
            background-color: #007bff;
        }

        .btn-review:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/order" class="top-right-link">Keranjang</a>

        <h1>Product Catalog</h1>

        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Search products..." required>
            <button type="submit">Search</button>
            <a href="/user/dashboard">Refresh</a>
        </form>

        <div class="product-grid">
            @foreach ($produk as $row)
            <div class="product-card">
                <img src="{{ asset('img/' . $row->gambar) }}" alt="{{ $row->nama }}">
                <h2 class="product-name">{{ $row->nama }}</h2>
                <p class="product-description">{{ $row->deskripsi }}</p>
                <p class="product-price">${{ number_format($row->harga, 2) }}</p>

                <!-- Quantity Input -->
                <div class="quantity-input">
                    <form action="/order" method="POST">
                        @csrf
                        <input type="hidden" name="produk_id" value="{{ $row->id }}" id="">
                        <input type="number" name="jumlah" value="1" min="1" required>
                        <button type="submit" class="btn-buy">Buy Now</button>
                    </form>
                </div>

                <a href="/review/{{ $row->id }}" class="btn-review">Review Now</a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
