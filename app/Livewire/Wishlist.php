<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Component
{
    public $wishlist;

    protected $listeners = ['articleAddedToWishlist' => 'refreshWishlist'];

    public function mount()
    {
        $this->wishlist = Auth::user()->wishlist->load('articles');
    }

    public function refreshWishlist()
    {
        $this->wishlist = Auth::user()->wishlist->load('articles');
    }

    public function removeFromWishlist($articleId)
    {
        $article = Article::find($articleId);
        if ($article) {
            $this->wishlist->articles()->detach($article->id);

            $this->wishlist = $this->wishlist->refresh();
        }
    }

    public function render()
    {
        return view('livewire.wishlist', [
            'articles' => $this->wishlist->articles,
        ]);
    }
}
