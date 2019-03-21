<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the spectacle that owns the role.
     */
    public function spectacle()
    {
        return $this->belongsTo('App\Spectacle');
    }

    /**
     * Get the worker that owns the role.
     */
    public function worker()
    {
        return $this->belongsTo('App\Worker');
    }
}
