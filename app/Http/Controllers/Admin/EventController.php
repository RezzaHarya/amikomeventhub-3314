<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        // Memakai relasi dan pengaturan limit paginasi (10 entri per halaman)
        $events = Event::with('category')->latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Menerapkan validasi data request dari pengguna
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // LOGIKA UPLOAD GAMBAR
        // Jika ada file poster yang diunggah, simpan ke folder storage/app/public/posters
        if ($request->hasFile('poster')) {
            $data['poster'] = $request->file('poster')->store('posters', 'public');
        }

        // Menyimpan data yang telah divalidasi ke dalam tabel menggunakan Model
        Event::create($data);

        return redirect()->route('admin.events.index')->with('success', 'Data Event berhasil ditambahkan.');
    }

    public function destroy(Event $event) 
    {
        // Hapus gambar dari storage jika ada sebelum menghapus data dari database
        if ($event->poster && Storage::disk('public')->exists($event->poster)) {
            Storage::disk('public')->delete($event->poster);
        }

        $event->delete();
        
        return redirect()->route('admin.events.index')->with('success', 'Data event berhasil dihapus secara permanen.');
    }

    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'poster' => 'nullable|image|max:2048',
        ]);

        // LOGIKA UPDATE GAMBAR
        if ($request->hasFile('poster')) {
            // Hapus poster lama jika ada
            if ($event->poster && Storage::disk('public')->exists($event->poster)) {
                Storage::disk('public')->delete($event->poster);
            }
            // Simpan poster baru
            $data['poster'] = $request->file('poster')->store('posters', 'public');
        }

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Rincian data event berhasil diperbarui.');
    }
}