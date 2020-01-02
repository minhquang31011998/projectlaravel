<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
	protected $table = 'products';

	// public function category(){
	// 	return $this->belongsTo(Category::class);
	// }
	public function orders(){
		return $this->belongsToMany(Order::class);
	}
	public function images(){
		return $this->belongsToMany(Images::class);


	}
}
