<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
  protected $table = 'post';

  public function post()
	{
		return $this->belongsTo('App\Post');
	}
}
