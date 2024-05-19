<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class AddToWishlist extends Component
{
    public $articleId;

    public function addToWishlist()
    {
        $user = Auth::user();

        // Verifica se l'utente ha una wishlist, se non ce l'ha, creane una
        if (!$user->wishlist) {
            $wishlist = Wishlist::create(['user_id' => $user->id]);
        } else {
            $wishlist = $user->wishlist;
        }

        $article = Article::find($this->articleId);

        if ($article) {
            // Verifica se l'articolo è già presente nella wishlist
            if ($wishlist->articles->contains($article->id)) {
                $this->dispatch('articleAddedToWishlist', 'Article is already in your wishlist!');
            } else {
                // Aggiungi l'articolo alla wishlist
                $wishlist->articles()->attach($article->id);
                $this->dispatch('articleAddedToWishlist', 'Article added to wishlist successfully!');
            }
        }

        session()->flash('message', 'Articolo inserito nella tua wishlist!');
    }

    public function render()
    {
        return view('livewire.add-to-wishlist');
    }
}
