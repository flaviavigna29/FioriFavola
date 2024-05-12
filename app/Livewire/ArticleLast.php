<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleLast extends Component
{
    public function render()
    {
        $articles= Article::orderBy('created_at', 'desc')->take(4)->get();

        return view('livewire.article-last', compact('articles'));
    }
}
