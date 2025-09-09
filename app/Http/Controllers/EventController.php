<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function showEvent()
{
    $events = Event::all();
    return view('event', compact('events'));
}

public function showDetailEvent($id)
    {
        $event = Event::findOrFail($id);

        return view('detailevent', compact('event'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

  public function store(Request $request)
{
    $data = $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi_singkat' => 'required|string|max:500',
        'tanggal' => 'required|date',
        'isi_berita' => 'required',
        'writer' => 'nullable|string|max:255',
        'editor' => 'nullable|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('gambar')) {
        $data['gambar'] = $request->file('gambar')->store('events', 'public');
    }

    Event::create($data);

    return redirect()->route('events.index')->with('success', 'Event berhasil ditambahkan!');
}

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

public function update(Request $request, Event $event)
{
    $data = $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi_singkat' => 'required|string|max:500',
        'tanggal' => 'required|date',
        'isi_berita' => 'required',
        'writer' => 'nullable|string|max:255',
        'editor' => 'nullable|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('gambar')) {
        if ($event->gambar) {
            Storage::disk('public')->delete($event->gambar);
        }
        $data['gambar'] = $request->file('gambar')->store('events', 'public');
    }

    $event->update($data);

    return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui!');
}


    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus.');
    }

    public function show(Event $event)
{
    return view('admin.events.show', compact('event'));
}

public function setHighlight(Request $request, Event $event)
{
    $validated = $request->validate([
        'highlight' => 'required|integer|min:0|max:3',
    ]);

    if ((int)$validated['highlight'] !== 0) {
        $occupied = Event::where('highlight', (int)$validated['highlight'])
            ->where('id', '!=', $event->id)
            ->first();

        if ($occupied) {
            return back()->with('error', 'Slot highlight '.$validated['highlight'].' sudah dipakai event lain.');
        }
    }

    $event->update(['highlight' => (int)$validated['highlight']]);

    return back()->with('success', 'Highlight berhasil diperbarui.');
}

public function setStatus(Request $request, Event $event)
{
    $validated = $request->validate([
        'status' => 'required|in:previously,upcoming,now',
    ]);

    $event->update(['status' => $validated['status']]);

    return back()->with('success', 'Status berhasil diperbarui.');
}



}
