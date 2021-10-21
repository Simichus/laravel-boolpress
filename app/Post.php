<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'category_id', 'content', 'image', 'slug'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
