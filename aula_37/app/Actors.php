<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $table = 'actors';

    public function getNomeCompleto(){
      return $this->first_name.' '.$this->last_name;
    }
}
