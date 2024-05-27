<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    // Pagina di visualizzazione articoli per categoria
    public function index(Request $request, Category $category)
    {
        $articles = $category->articles;
        return view('article.index', compact('articles', 'category'));
    }

    // Pagina di visualizzazione di tutti gli articoli
    public function all()
    {
        return view('article.all');
    }
  
    public function create()
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category,
            'img' => $request->file('img')->store('public/article'),
            'description' => $request->description,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->back()->with('message', 'Articolo inserito');
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {

        if ($request->file('img')) {
            $img = $request->file('img')
                ->store('public/article');
        } else {
            $img = $article->img;
        }

        $article->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'category_id' => $request->category,
        ]);


        return redirect(route('article.edit', compact('article')))->with('message', 'articolo modificato');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with('message', 'Articolo eliminato');
    }

    public function searchArticles(Request $request) {
        $word = $request->searched;
        $articles = Article::search($request->searched)->get();
        return view('article.search', compact('articles', 'word'));
    }
}
