<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable=[
        'user_id','comment','articles_id',
    ];
    
    

    public function user(){
        return $this->belongsTo(\App\User::class,'user_id');
        // return $this->belonsTo('App\User', 'user_id', 'id');
    }

    public function article(){
        return $this->belonsTo('App\Article', 'articles_id', 'id');
    }

    protected $casts = [
        'articles_id' => 'integer',
    ];
}
