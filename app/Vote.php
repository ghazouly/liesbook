<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'votes';

    protected $fillable = [
        'type'
    ];

    public function user()
    {
      return $this->belongsTo('App\User', 'user_id');
    }

    public function post()
    {
      return $this->belongsTo('App\Post', 'post_id');
    }

}
