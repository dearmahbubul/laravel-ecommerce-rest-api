<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
		'star','customer','review'
    ];

    public function products()
    {
    	return $this->belongsTo(Product::class);
    }
}
