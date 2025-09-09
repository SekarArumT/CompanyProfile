<?php

namespace App\Http\Controllers;

use App\Models\Aboutcount;
use Illuminate\Http\Request;

class AboutcountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutcounts = Aboutcount::all();
        return view('admin.aboutcount.index', compact('aboutcounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aboutcount.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'insan_satylaksana' => 'required|integer',
            'distribution_center' => 'required|integer',
            'csr_partner' => 'required|integer',
            'sku_products' => 'required|integer',
        ]);

        Aboutcount::create($request->all());

        return redirect()->route('aboutcount.index')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aboutcount $aboutcount)
    {
        return view('admin.aboutcount.show', compact('aboutcount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aboutcount $aboutcount)
    {
        return view('admin.aboutcount.edit', compact('aboutcount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aboutcount $aboutcount)
    {
        $request->validate([
            'insan_satylaksana' => 'required|integer',
            'distribution_center' => 'required|integer',
            'csr_partner' => 'required|integer',
            'sku_products' => 'required|integer',
        ]);

        $aboutcount->update($request->all());

        return redirect()->route('aboutcount.index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aboutcount $aboutcount)
    {
        $aboutcount->delete();

        return redirect()->route('aboutcount.index')->with('success', 'Data deleted successfully.');
    }

     public function showAboutUs()
    {
        $aboutcount = Aboutcount::first();

        return view('about', compact('aboutcount'));
    }
}
