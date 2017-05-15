<?php

namespace App;

use App\Traits\HasModelTrait;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
	use HasModelTrait;
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable =  ['name', 
							'slug',
							'user_id'];

	public function user()
	{
		return $this->belongsTo('App\User'); 
	}


}
