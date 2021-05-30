<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function tags()
    {
        $this->hasMany('App\Tag');
    }
}
