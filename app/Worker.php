<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    /**
     * Get the roles for the worker.
     */
    public function roles()
    {
        return $this->hasMany('App\Role');
    }
}
