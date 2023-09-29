<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addCart(Request $request){
        // dd(Auth::user()->id);
        // dd($request->input('unit') * $request->input('size-select'));

        $validatedData = $request->validate([
            'unit' => 'required|integer|min:1',
            'slice' => 'required|string',
            'selected-size-text' => 'required|string',
            'size-select' => 'required|numeric',
        ]);
        


        $data = [
            'users_id' =>Auth::user()->id,
            'pizzamenu_PizzaID' =>$request->input('pizzaID'),  
            'Unit' => $request->input('pizzaID'),
            'Slice' => $validatedData['slice'],
            'Size' => $validatedData['selected-size-text'],
            'Subtotal' => $request->input('unit') * $request->input('size-select'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $result= Order::create($data);
        

        if ($result) {

            toast('Order added to Cart!','success');
                
        }else{ 
            
            toast('Failed to Place order!','error');
        }

        return redirect()->route('menu');

    }

    public function Cart(){
        $userId = Auth::user()->id;

        $results = Order::select(
            'orders.id as order_id',
            'orders.users_id',
            'pizzamenu.PizzaName',
            'orders.Unit',
            'orders.Slice',
            'orders.Size',
            'orders.Subtotal',
            'pizzamenu.Img as PizzaImage'
        )
        ->join('pizzamenu', 'orders.pizzamenu_PizzaID', '=', 'pizzamenu.PizzaID')
        ->where('orders.users_id', $userId)
        ->get();
        return view('webCart',compact('results'));
    }
    
}
