<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    use NewsTrait;

    public function index()
    {
        return view('news.index')->with([
            'newsList' => $this->getNews()
        ]);
    }

    public function show(int $id)
    {
        return view('news.show')->with([
            'news' => $this->getNews($id)
        ]);
    }
}
