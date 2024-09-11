<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
   <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    padding: 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.alert {
    padding: 15px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    margin-bottom: 20px;
    border-radius: 5px;
}

.order-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.order-table thead {
    background-color: #f8f8f8;
}

.order-table th,
.order-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.order-table th {
    font-weight: bold;
}

.order-table td {
    font-size: 14px;
}

.total-price {
    font-weight: bold;
    text-align: right;
    margin-top: 20px;
}

.total-price span {
    color: #4CAF50;
    font-size: 18px;
}

   </style>
</head>
<body>
    <div class="container">
        <h1>Order List</h1>

        <!-- Alert if success -->
        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <!-- Order Table -->
        <table class="order-table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Brand</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->produk->nama }}</td>
                    <td>{{ $order->produk->deskripsi }}</td>
                    <td>{{ $order->produk->brand->name }}</td>
                    <td>Rp. {{ $order->produk->harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Total Price -->
        <div class="total-price">
            Total Price: <span>Rp. {{ $totalPrice }}</span>
            <br>
            <a href="/">BAYAR!</a>
        </div>
    </div>
</body>
</html>
