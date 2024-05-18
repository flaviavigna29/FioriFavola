<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleFilter extends Component
{
    // public $category;
    // public $price;
    // public $name;

    // public function render()
    // {
    //     $articles = Article::where('category', $category)->get();

    //     if ($this->category) {
    //         $articles->where('category', $this->category);
    //     }

    //     if ($this->price) {
    //         $articles->where('price', '<=', $this->price);
    //     }

    //     if ($this->name) {
    //         $articles->where('name', 'like', '%' . $this->name . '%');
    //     }

    //     $articles = $articles->get();
        
    //     return view('livewire.article-filter', [
    //         'articles' => $articles
    //     ]);
    // }
}
