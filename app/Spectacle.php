<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spectacle extends Model
{
    /**
     * Get the roles for the spectacle.
     */
    public function roles()
    {
        return $this->hasMany('App\Role')->orderBy('display', 'asc');
    }
}
