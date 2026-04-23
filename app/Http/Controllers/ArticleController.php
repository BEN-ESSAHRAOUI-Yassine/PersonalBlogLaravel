<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return redirect()->route('dashboard');
    }

    public function create()
    {
        $categories = Category::all();

        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,published',
        ]);

        $data['user_id'] = auth()->id();

        Article::create($data);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Article created.');
    }

    public function edit(Article $article)
    {
        abort_if($article->user_id !== auth()->id(), 403);

        $categories = Category::all();

        return view('articles.edit', compact(
            'article',
            'categories'
        ));
    }

    public function update(Request $request, Article $article)
    {
        abort_if($article->user_id !== auth()->id(), 403);

        $data = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,published',
        ]);

        $article->update($data);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Article updated.');
    }

    public function destroy(Article $article)
    {
        abort_if($article->user_id !== auth()->id(), 403);

        $article->delete();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Article deleted.');
    }
}