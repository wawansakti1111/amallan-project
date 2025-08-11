<?php
// File: amallan-project/app/Http/Controllers/Admin/AdminDashboardController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{
    public function index(News $news = null)
    {
        $allNews = News::latest()->get();
        return view('admin-dashboard', [
            'allNews' => $allNews,
            'editingNews' => $news
        ]);
    }

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

        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $path = $request->file('image')->store('news_images', 'public');
        } else {
            $path = $news->image;
        }

        $news->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $path,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil diupdate!');
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil dihapus!');
    }
}