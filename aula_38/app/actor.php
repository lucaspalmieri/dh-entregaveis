<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'actors';

    public function getNomeCompleto(){
      return $this->first_name.' '.$this->last_name;
    }

    protected $fillable = ['first_name', 'last_name', 'rating', 'favorite_movie_id'];

    public function filmeFavorito(){
      
      return $this->hasOne(movie::class, 'id', 'favorite_movie_id');
    }
}
