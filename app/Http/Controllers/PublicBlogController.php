<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicBlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::with('category')
            ->where('status', 'published');

        if ($request->category) {
            $query->where('category_id', $request->category);
        }

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $articles = $query->latest()->paginate(6);
        $categories = Category::all();

        return view('public.index', compact(
            'articles',
            'categories'
        ));
    }

    public function show(Article $article)
    {
        abort_if($article->status !== 'published', 404);

        $article->load('category', 'user');

        return view('public.show', compact('article'));
    }
}