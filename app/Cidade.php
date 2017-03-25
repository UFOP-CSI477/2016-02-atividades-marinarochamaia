<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

    protected $fillable = ['nome','estado_id'];
    public $timestamps = false;

    public function estados(){
       return $this->BelongsTo('App\Cidade');
   }


}
