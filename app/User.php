<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
        * Each user can have one or more jobs posted
        *
    */
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    /*
     * Determines if the user owns a particular job
     * @param integer $jobId
     * @return Boolean
     */

    public function owns($jobId)
    {
        $job = Job::find($jobId);

        if ($job->user_id == $this->id)
        {
            return true;
        } else {
            return false;
        }

    }
}
