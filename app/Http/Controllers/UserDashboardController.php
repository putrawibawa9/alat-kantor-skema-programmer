<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $produk = Produk::with('brand')->get();
        
        return view('user.dashboard', compact('produk'));
    }
}
