<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use RealRashid\SweetAlert\Facades\Alert;


class NewsletterController extends Controller
{
    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */

     public function index(){
        $email = Newsletter::all();
        return view('newsletter',compact('email'));
    }
    public function storeEmail(Request $request)
    {  
        

   
        $validatedData = $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

      

            $e = new Newsletter;
            $e->email = $validatedData['email'];
        
            if ($e->save()) {

                Alert::success('Thank You for Subscribing!', '
                    We appreciate your interest in our newsletter. You are now subscribed to receive our latest updates and news.
                    Stay tuned for exciting content!');
                    
            }else{ 
                
                 Alert::info('You are already subscribed!', '
                We appreciate your interest in our newsletter. You are already subscribed to receive our latest updates and news.
                Stay tuned for exciting content!');
            }

            return redirect()->back();
        
    
    }
}
