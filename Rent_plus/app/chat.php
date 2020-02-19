<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class chat extends Model
{
    protected $fillable =['from','to','massages'];

}
