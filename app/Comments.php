<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'post_id', 'comment', 'name', 'email'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
