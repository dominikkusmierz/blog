<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){
        $user_id=\Auth::user()->id;
        
        $this->comments()->create(compact('body','user_id'));
    }
    public function post(){
        return $this->belongsToMany(Categories::class);
    }
}
