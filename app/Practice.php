<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class practice extends Model
{
    protected $fillable=[
        'practice_sentence','user_id','practice_title',
    ];
}
