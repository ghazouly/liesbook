<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'content'
    ];

    public function setContentAttribute($value)
    {
      return $this->attributes['content'] = bcrypt($value);
    }

    public function getContentAttribute($value)
    {
      return decrypt($this->content);
    }

    public function comments(){
        $this->hasMany('App\Comment');
    }

    public function votes(){
        $this->hasMany('App\Vote');
    }




}
