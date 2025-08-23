<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Menyimpan berita baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image') ? $request->file('image')->store('news_images', 'public') : null;

        News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $path,
        ]);

        // Arahkan kembali ke dashboard setelah berhasil
        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Memperbarui data berita yang ada di database.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $news->image;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            // Simpan gambar baru
            $path = $request->file('image')->store('news_images', 'public');
        }

        $news->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $path,
        ]);

        // Arahkan kembali ke dashboard setelah berhasil
        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil diupdate!');
    }

    /**
     * Menghapus berita dari database.
     */
    public function destroy(News $news)
    {
        // Hapus gambar dari storage jika ada
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        // Arahkan kembali ke dashboard setelah berhasil
        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil dihapus!');
    }
}