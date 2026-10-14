<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() 
    {
        $articles = Article::latest()->paginate(5);
        return view('pages.articles.index', compact('articles'));
    }

    public function create() 
    {
        return view('pages.articles.create');
    }

    public function store(Request $req) 
    {
        $validated = $req->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Article::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'is_published' => $req->has('is_published'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Статья успешно создана!');
    }

    public function show(Article $article)
    {
        return view('pages.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('pages.articles.edit', compact('article'));
    }

    public function update(Request $req, Article $article)
    {
        $validated = $req->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $article->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'is_published' => $req->has('is_published'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Статья успешно обновлена!');
    }

    public function destroy(Article $article) 
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Статья успешно удалена!');
    }
}
