<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the user that owns the post.
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'author_id');
    }
}
