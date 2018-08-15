<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $table = 'genres';

    protected $fillable = ['name', 'ranking', 'active'];
}
