<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Event; 
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $highlights = Event::whereIn('highlight', [1,2,3])
            ->orderBy('highlight') 
            ->get();

        return view('LandingPage', compact('products','highlights'));
    }
}
