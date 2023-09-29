<?php

namespace App\Http\Controllers;
use App\Models\pizzamenu;
use Illuminate\Http\Request;

class menuController extends Controller
{
   public function index(){
        $pizza = Pizzamenu::where('isAvailable', 1)->get();
        return view('webMenu',compact('pizza'));
   }

   public function menuPizza(Request $request, $id){
      // Use the $pizza parameter to query the database for the pizza
      $id = Pizzamenu::where('PizzaID', $id)->first();

      // Check if the pizza was found
      if ($id) {
          // You can now work with the $pizza object
          return view('webMenu-pizza',compact('id'));
      } else {
          // Handle the case where the pizza was not found, such as displaying an error message
          toast('Pizza not found!','error');
          
          return redirect()->back();
      }
    } 
    
    
}
