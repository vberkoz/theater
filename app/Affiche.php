<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiche extends Model
{
    /**
     * Get the spectacle that owns the affiche.
     */
    public function spectacle()
    {
        return $this->belongsTo('App\Spectacle', 'spectacle_id');
    }
}
