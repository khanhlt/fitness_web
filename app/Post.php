<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'post';

  public function like()
	{
		return $this->hasMany('App\PostLike');
	}

	public function comment()
	{
		return $this->hasMany('App\PostComment');
	}
}
