<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;
use RealRashid\SweetAlert\Facades\Alert;

class feedbackController extends Controller
{   
    public function index(){
        $feedback = feedback::all();
        return view('feedback',compact('feedback'));
    }

    public function storeFeedback(Request $request){

    
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'message' => 'required|string'
        ]);

        $result = new feedback;
        $result->name = $validatedData['name'];
        $result->email = $validatedData['email'];
        $result->message = $validatedData['message'];

        if ($result->save()) {

            Alert::success("Thank You for Submitting your Feedback!", "
            We appreciate your input. Your feedback has been successfully submitted.If you have any further comments or questions, please don't hesitate to reach out to us.");
                
        }else{ 
            
             Alert::info('Failed to Suubmit FeedBack!', '
             Error Occurs. Please try again later');
        }

        return redirect()->back();

    }
}
