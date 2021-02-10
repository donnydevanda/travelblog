<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'users_id', 'categories_id', 'title', 'description', 'image'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
