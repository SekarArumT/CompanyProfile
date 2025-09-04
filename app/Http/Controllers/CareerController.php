<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::latest()->paginate(10);
        return view('admin.careers.index', compact('careers'));
    }

    public function showCareers() {
    $careers = Career::where('status', 'open')->get(); 
    return view('careers', compact('careers'));
}

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'salary_range' => 'nullable|string|max:255',
            'status' => 'required|in:open,closed,on_hold',
            'link' => 'nullable|url',
        ]);

        Career::create($request->all());

        return redirect()->route('careers.index')->with('success', 'Career created successfully.');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'salary_range' => 'nullable|string|max:255',
            'status' => 'required|in:open,closed,on_hold',
            'link' => 'nullable|url',
        ]);

        $career->update($request->all());

        return redirect()->route('careers.index')->with('success', 'Career updated successfully.');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('careers.index')->with('success', 'Career deleted successfully.');
    }
}
