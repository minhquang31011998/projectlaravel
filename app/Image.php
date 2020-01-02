<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'Images';
	

	public function user(){
		return $this->belongsTo(User::class, 'product_id');
	}
}
