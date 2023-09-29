<?php

namespace App\Http\Controllers;
use App\Models\pizzamenu;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $pizza = Pizzamenu::where('isAvailable', 1)->take(4)->get();
        return view('webHome',compact('pizza'));
    }
}
