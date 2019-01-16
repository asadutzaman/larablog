<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cms extends Model
{
    protected $fillable = ['name','email','phone','District'];
}
