<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //protected $fillable=['name'];//solution for mass assignment
    protected $guarded = [];//turn off mass assignment
}
