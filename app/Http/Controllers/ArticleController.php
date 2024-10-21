<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $items = Article::all();

        return view('articles.index', [
            'articles' => $items
        ]);
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('article', 'public');
        Article::create($data);

        return redirect()->back();
    }
}
