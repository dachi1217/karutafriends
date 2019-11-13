<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    protected $fillable=[
       'card_name','user_id',
    ];
}
