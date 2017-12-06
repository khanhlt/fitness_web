<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
  protected $table = 'registration';

  public function user()
  {
    return $this->belongsTo('App\User','user_id','id');
  }
  
  public function course()
  {
    return $this->belongsTo('App\Course');
  }
}
