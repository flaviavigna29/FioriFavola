<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\On;

class ArticleAll extends Component
{
    public $articles;
    public $defaultArticle;

    #[On('allArticles')]
    public function mount()
    {
        $this->defaultArticle = Article::orderBy('created_at', 'desc')->get();
        $this->articles = $this->defaultArticle;
    }

    protected $listeners = [
        'OrderByPriceAsc' => 'OrderByPriceAsc',
        'OrderByPriceDesc' => 'OrderByPriceDesc',
        'OrderByTitleAsc' => 'OrderByTitleAsc',
        'OrderByTitleDesc' => 'OrderByTitleDesc',
        'resetOrder' => 'resetOrder'
    ];

    public function OrderByPriceAsc()
    {
       $this->articles = Article::orderBy('price')->get();
    }

    public function OrderByPriceDesc()
    {
        $this->articles = Article::orderByDesc('price')->get();
    }

    public function OrderByTitleAsc()
    {
        $this->articles = Article::orderBy('title')->get();
    }

    public function OrderByTitleDesc()
    {
        $this->articles = Article::orderByDesc('title')->get();
    }

    public function resetOrder()
    {
        $this->articles = $this->defaultArticle;
    }

    public function render()
    {
        return view('livewire.article-all', ['articles' => $this->articles]);
    }
}
