<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use Auth;
class ProductController extends Controller
{
    public function detail($id,$slug)
    {
        $product = Product::where('id',$id)->first();
        return view('front.product.details',compact('product'));
    }

    public function addToCart($id,$quantity)
    {
        # code...
        $product = Product::select('id','name','price','thumbnail')->where('id',$id)->first();
        if ($product) {
            # code...

            $cart = Session::get('cart',[]);

            if(isset($cart[$id])) {
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + $quantity;
            } else {
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => $quantity,
                    "price" => $product->price,
                    "thumbnail" => $product->thumbnail
                ];
            }
            Session::put('cart', $cart);
            $item_in_cart = count(Session::get('cart'));

            return $item_in_cart;

           
        } else {
            # code...
            return "not found";
        }
        
    }

    public function showCart()
    {
        // return $product = Session::get('cart');
        // $id = 18;
        // $cart = Session::get('cart',[]);

        // if (isset($cart[$id])) {
        //     # code...
        //      Session::forget([$id]);
        //     return $product = Session::get('cart');
        // } else {
        //     # code...
        //     return "not";
        // }
        

        // return "ok";
    //    return  count(Session::get('cart'));
    //  return $product = Session::flush('cart');
      return view('front/product/cartdetail');
    }





    // {
    //     return $pro = Session::get('cart');

    //     if(Session::get('cart')){
    //         $cart = Session::get('cart');
    //         // return  $cart;
    //         $i = 0;
    //         foreach($cart as $item){
    //             $count = $i+1;
    //         }
            
    //     }else{
    //         $count = 0;
    //     }
    //     return $count;
        
    //     return gettype($pro);
    
    
}
