<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PizzaController extends Controller
{
    public function getData()
    {
        $pizza = DB::table('pizza')->get();
		$pizza_type = DB::table('pizza_type')->get();
        return view('pizza', compact('pizza', 'pizza_type'));
    }

    public function insert(Request $request) {
    	$size = $request->input('size');
    	$name = $request->input('pizzaName');

		$pizza = DB::table('pizza')->get();
		$pizza_type = DB::table('pizza_type')->get();
    	foreach ($pizza_type as $key => $value) {
    		if($size == $value->size) {
    			$price = $value->price;
    		}
    	}

    	$data=array('name'=>$name,"size"=>$size,"price"=>$price,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),);
    	DB::table('order')->insert($data);
    }
    

}
