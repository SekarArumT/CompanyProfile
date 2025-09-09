<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Event; 
use App\Models\Aboutcount; // jangan lupa import model
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $highlights = Event::whereIn('highlight', [1,2,3])
            ->orderBy('highlight') 
            ->get();

        // Ambil About Us data (anggap hanya 1 baris total)
        $aboutcount = Aboutcount::first();

        return view('LandingPage', compact('products','highlights','aboutcount'));
    }
}
