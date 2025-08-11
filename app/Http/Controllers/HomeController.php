<?php
// File: amallan-project/app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();
        return view('welcome', compact('news'));
    }

    public function showNews(News $news)
    {
        return view('news.show', compact('news'));
    }
}