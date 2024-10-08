<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function order(Request $request){
        Order::create([
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
        ]);
        // decrese product stock
        $produk = Produk::find($request->produk_id);
        $produk->stok = $produk->stok - $request->jumlah;
        $produk->save();
// return with success message
        return redirect('/user/dashboard')->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // delete order
        Order::destroy($id);
        // return with success message
        return redirect('/admin/order')->with('success', 'Order berhasil dihapus');
    }
}
