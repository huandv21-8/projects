<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;

class homeController extends Controller
{
    public function index()
    {
        $real = product::where('products.status', 0)
            ->join('categories', 'categories.id_category', '=', 'products.id_category')
            ->where('categories.id_category', 1)
            ->inRandomOrder()
            ->limit(4)
            ->get();


        $shoes = product::where('products.status', 0)
            ->join('categories', 'categories.id_category', '=', 'products.id_category')
            ->where('categories.id_category', 47)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        $belgium = product::where('products.status', 0)
            ->join('categories', 'categories.id_category', '=', 'products.id_category')
            ->where('categories.id_category', 29)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        $mancity = product::where('products.status', 0)
            ->join('categories', 'categories.id_category', '=', 'products.id_category')
            ->where('categories.id_category', 6)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        $ball = product::where('products.status', 0)
            ->join('categories', 'categories.id_category', '=', 'products.id_category')
            ->where('categories.id_category', 60)
            ->inRandomOrder()
            ->limit(4)
            ->get();


        $sold_product = product::where('status', 0)
            ->orderBy('quantity_sold', 'DESC')
             ->limit(3)
            ->get();

        $rated_product = product::where('status', 0)
            ->orderBy('price', 'DESC')
             ->limit(3)
            ->get();
        $latest_product = product::where('status', 0)
            ->orderBy('created_at', 'DESC')
             ->limit(3)
            ->get();
            
        return view('shop.pages.home', [
            'real' => $real,
            'shoes' => $shoes,
            'belgium' => $belgium,
            'mancity' => $mancity,
            'ball' => $ball,
            'sold_product' => $sold_product,
            'rated_product' => $rated_product,
            'latest_product' => $latest_product
        ]);
    }
}
