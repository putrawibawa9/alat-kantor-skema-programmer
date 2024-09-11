<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index($id){
        $produk = Produk::find($id);
        $reviews = Review::where('produk_id', $id)->get();
        return view('user.review', compact('produk', 'reviews'));
    }

    public function store(Request $request){
    
        Review::create($request->all());
        return redirect('/user/dashboard');
        
    }
}
