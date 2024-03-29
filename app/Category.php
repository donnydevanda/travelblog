<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function categories(){
        return $this->hasMany(Category::class, 'categories_id', 'id');
    }
}
