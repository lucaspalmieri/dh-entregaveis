<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movies';

    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date'];

    public function getReleaseDate(){
      $release_date = new \Datetime($this->release_date);
      return $release_date->fotmat('d/m/Y');
    }

    public function getReleaseDateToInput(){
      $release_date = new \Datetime($this->release_date);
      return $release_date->fotmat('d/m/Y');
    }

    public function getLength(){
      if($this->length){
        return ($this->length / 60) .' horas';
      }
      return 'Duração do filme não consta no banco de dados';
    }

    public function genero(){
      return $this->hasOne(genre::class, 'id', 'genre_id');
    }

    public function actor(){
      return $this->belongsToMany(actor::class, 'actor_movie', 'actor_id', 'movie_id');
    }
}
