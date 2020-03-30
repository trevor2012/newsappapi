<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillables = [
        'description', 'url', 'post_id', 'featured',
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
