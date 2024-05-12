<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'img',
        'description',
        'subtitle',
        'body',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
