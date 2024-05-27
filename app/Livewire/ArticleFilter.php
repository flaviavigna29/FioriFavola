<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class ArticleFilter extends Component
{
    public function OrderByPriceAsc()
    {
        $this->dispatch('OrderByPriceAsc');
    }

    public function OrderByPriceDesc()
    {
        $this->dispatch('OrderByPriceDesc');
    }

    public function OrderByTitleAsc()
    {
        $this->dispatch('OrderByTitleAsc');
    }

    public function OrderByTitleDesc()
    {
        $this->dispatch('OrderByTitleDesc');
    }

    public function resetOrder()
    {
        $this->dispatch('resetOrder');
    }

    public function render()
    {
        return view('livewire.article-filter');
    }
}
