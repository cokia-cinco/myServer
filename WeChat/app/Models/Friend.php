<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    protected $table='friend';
    public $timestamps = false;
    protected $fillable = ['id','user_id','friend_id'];
}

