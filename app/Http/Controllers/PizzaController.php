<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PizzaController extends Controller
{
    public function index()
    {
        $pizza = DB::table('pizza')->get();

        return view('pizza', ['pizza' => $pizza]);
    }
}
