<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Product;
use \Illuminate\Support\Str;

class ProductsSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$times = 15;

		for($i=0;$i<$times;$i++){
		    Product::create(
                array(
                    'rfc' => Str::random(),
                    'name' => Str::random(),
                    'quantity' => Str::random(),
                    'price' => Str::random(),
                    'total' => Str::random()
                )
            );
		}
	}

}
