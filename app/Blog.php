<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'content',
        'is_actived'
    ];
    protected $hidden = [
        'user_id'
    ];

    public function comments(){
        $this->hasMany(\Comment::class, 'blog_id');
    }

    public function user(){
        $this->belongsTo(\User::class, 'user_id');
    }

}
