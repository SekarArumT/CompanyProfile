<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
         return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'namabrand' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'nullable|string',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('brands', 'public');
        }
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('brands', 'public');
        }

        Brand::create($validated);
        return redirect()->route('brands.index')->with('success', 'Brand berhasil ditambahkan');
    }

    public function show(Brand $brand)
    {
        return view('admin.brands.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'namabrand' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'nullable|string',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('brands', 'public');
        }
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('brands', 'public');
        }

        $brand->update($validated);
        return redirect()->route('brands.index')->with('success', 'Brand berhasil diupdate');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Brand berhasil dihapus');
    }
}
