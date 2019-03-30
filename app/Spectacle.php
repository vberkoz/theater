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
        return $this->hasMany('App\Role')
            ->orderBy('display', 'asc');
    }

    /**
     * Get the affiches for the spectacle.
     */
    public function affiches()
    {
        return $this->hasMany('App\Affiche')
            ->where('starts_at', '>', date("Y-m-d H:i:s"))
            ->orderBy('starts_at', 'asc');
    }
}
