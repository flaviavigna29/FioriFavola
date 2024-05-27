<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class AddToWishlist extends Component
{

    public $articleId;
    public $isInWishlist = false;

    public function mount($articleId)
    {
        $this->articleId = $articleId;
        $this->checkIfInWishlist();
    }

    public function checkIfInWishlist()
    {
        $user = Auth::user();
        $wishlist = $user->wishlist;

        if ($wishlist && $wishlist->articles->contains($this->articleId)) {
            $this->isInWishlist = true;
        } else {
            $this->isInWishlist = false;
        }
    }

    public function toggleWishlist()
    {
        $user = Auth::user();
        $wishlist = $user->wishlist;

        if (!$wishlist) {
            $wishlist = Wishlist::create(['user_id' => $user->id]);
        }

        $article = Article::find($this->articleId);

        if ($article) {
            if ($wishlist->articles->contains($article->id)) {
                $wishlist->articles()->detach($article->id);
                $this->isInWishlist = false;
                session()->flash('message', 'Articolo rimosso dalla wishlist!');

                $this->dispatch('wishlistUpdated');
            } else {
                $wishlist->articles()->attach($article->id);
                $this->isInWishlist = true;
                session()->flash('message', 'Articolo inserito nella wishlist!');

                $this->dispatch('wishlistUpdated');
            }
        }

    }

    public function render()
    {
        return view('livewire.add-to-wishlist');
    }
}
