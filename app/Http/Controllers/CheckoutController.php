<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('front.checkout.checkout');
    }
    public function storeaddress(Request $request)
    {
        $user =Auth::user();
        $user->order_name = $request->name;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->pin_code = $request->pincode;
        $user->description = $request->description;
        $user->save();
       
        
  
      

    }
}
