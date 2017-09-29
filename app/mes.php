<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mes extends Model
{
  protected $table ="meses";

  protected $fillable =['nombre'];

  public function colegiatura()
  {
    return $this->hasMany('App\colegiatura');
  }
}
