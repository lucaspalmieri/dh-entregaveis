<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'actors';
    protected $filable = ['first_name', 'last_name', 'rating'];
}
