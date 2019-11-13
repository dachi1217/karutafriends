<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable=[
      'user_id','articles_title','articles_body','taimestamps',
    ];

    public function user_id(){        
        return $this->belongsTo(\App\User::class,'user_id');
    }
    
    public function comments(){        
        return $this->hasMany(\App\Comment::class,'articles_id','id');
    }
    

}
