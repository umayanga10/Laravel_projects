<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = ['first_name','last_name','address','phone','image'];
}
