<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillables = [
        'title', 'content', 'post_type', 'author_id', 'category_id', 'meta_data',
    ];


    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(Images::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }
}


