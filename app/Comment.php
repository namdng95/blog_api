<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'comment'
    ];

    public function blog(){
        $this->belongsTo(\Blog::class, 'blog_id');
    }

    public function user(){
        $this->belongsTo(\User::class, 'user_id');
    }
}
