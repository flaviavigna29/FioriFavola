<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'price',
        'img',
        'description',
        'subtitle',
        'body',
        'category_id'
    ];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'category' => $category,
        ];

        return $array;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
