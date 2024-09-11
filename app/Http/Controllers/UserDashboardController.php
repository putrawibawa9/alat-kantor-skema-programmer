<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $produk = Produk::with('brand')->get();
        
        return view('user.dashboard', compact('produk'));
    }

    public function search(Request $request)
{
    $query = $request->input('query');
    
    // Search for products based on the query
    $produk = Produk::where('nama', 'LIKE', "%{$query}%")
                    ->orWhere('deskripsi', 'LIKE', "%{$query}%")
                    ->get();
    
    // Pass the search results back to the view
    return view('user.dashboard', compact('produk'));
}

public function order(){
    $orders = Order::with('produk')->get();
    $totalPrice = $orders->sum(function($order) {
    return $order->produk->harga;
});
    return view('user.order', compact('orders', 'totalPrice'));
}

public function adminOrder(){
    $orders = Order::with('produk')->get();
   
    return view('produk.order', compact('orders'));
}

}
