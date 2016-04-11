<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $fillable = ['title'];

    /**
     * Each job is owned by a registered user
     *
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
