<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'org_name', 'org_twitter', 'org_url', 'org_type', 'org_photo_path', 'org_image_path'
    ];

    /*
     * Each profile has belongs to a single user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getFillable() {
        return $this->fillable;
    }
}
