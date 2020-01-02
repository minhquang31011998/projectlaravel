<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
	protected $table = 'user_info';
	

	public function user(){
		return $this->belongsTo(User::class, 'user_id');
	}

}
