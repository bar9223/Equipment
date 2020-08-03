<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $fillable = ['name', 'picture', 'code', 'price', 'status'];
}
