<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::all();
        $detail = News::findOrFail($id);
        return view('news.show', compact('news', 'detail'));
    }
}
