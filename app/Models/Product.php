<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $fillable = ['rfc','name','quantity','price','total'];

	public static $rules = [
		"rfc" => "required|maxlength:13|minlength:12",
        "name" => "required|alpha",
        "quantity" => "required|alpha",
        "price" => "required|alpha",
        "total" => "required|alpha",
	];

}