<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = ['catagory','product','complain','other_issue'];
}
