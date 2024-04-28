<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->input('category');
        $articles = Article::where('category', $category)->get();
        return view('article.index', compact('articles', 'category'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'price' => $request->price,
            'category' => $request->category,
            'img' => $request->file('img')->store('public/article'),
            'description' => $request->description,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->back()->with('message', 'Articolo inserito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

        if ($request->file('img')) {
            $img = $request->file('img')
                ->store('public/article');
        }
        else{
            $img = $article->img;
        }

        $article->update([
            'title' => $request->title,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);


        return redirect(route('article.index'))->with('message', 'articolo modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
