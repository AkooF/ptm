<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];
    protected $hidden = [
      'updated_at', 'pivot'
    ];

    public function tasks()
    {
       return $this->belongsToMany('App\Task', 'task_tag')
           ->without('pivot');
    }
}
