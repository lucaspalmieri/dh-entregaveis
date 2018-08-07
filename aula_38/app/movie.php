<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movies';
    protected $filable = ['title', 'rating', 'awards', 'length', 'release_date'];

}
