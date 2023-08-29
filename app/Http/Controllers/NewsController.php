<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    use NewsTrait;
    use CategoriesNewsTrait;

    public function index()
    {
        return \view('news.index', [
            'news' => $this->getNews(),
        ]);
    }

    public function show(int $id)
    {
        return $this->getNews($id);
    }


    public function getNewsByCategory($categoryId)
    {
    }

    public function getNewsDetails($newsId)
    {
    }
}
