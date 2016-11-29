<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Models\Product;

class ProductsController extends Controller {
	public function index(){
		$products = Product::all();

        return View::make('products.index')->with("products", $products);
	}

	public function create(){
		return View::make('products.new');
	}

	public function store(Request $request){
	    $this->validate($request, Product::$rules);

		Product::create($request->all());

		Session::flash('success', trans("products.notifications.register_successful"));

		return Redirect::to("/products");
	}

	public function edit($id){
        $product = Product::find($id);

        if(!$product){
            Session::flash('error', trans("products.notifications.no_exists"));

            return Redirect::to("/products");
        }

        return View::make('products.edit')->with("product", $product);
	}

	public function update(Request $request){
        $this->validate($request, Product::$rules);

        $product = Product::find($request->id);

        if(!$product){
            Session::flash('error', trans("products.notifications.no_exists"));

            return Redirect::to("/products");
        }

        $product->rfc = $request->rfc;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->total = $request->total;

        $product->save();

        Session::flash('success', trans("products.notifications.update_successful"));

        return Redirect::to("/products");
	}

	public function active($id){
        $product = Product::find($id);

        if(!$product){
            Session::flash('error', trans("products.notifications.no_exists"));

            return Redirect::to("/products");
        }

        $product->active = 1;
        $product->save();

        Session::flash('success', trans("products.notifications.activated_successful"));

        return Redirect::to("/products");
	}

	public function deactive($id){
        $product = Product::find($id);

        if(!$product){
            Session::flash('error', trans("products.notifications.no_exists"));

            return Redirect::to("/products");
        }

        $product->active = 0;
        $product->save();

        Session::flash('success', trans("products.notifications.deactivated_successful"));

        return Redirect::to("/products");
    }

    public function destroy(Request $request){
        $product = Product::find(Input::get("id"));

        if(!$product){
            Session::flash('error', trans("products.notifications.no_exists"));

            return Redirect::to("/products");
        }

        $product->delete();

        Session::flash('success', trans("products.notifications.delete_successful"));

        return Redirect::to("/products");
    }
}