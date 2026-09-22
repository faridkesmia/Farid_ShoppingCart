<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private array $cart;
    public function __construct()
    {
        $this->cart = session()->get('cart',[]);
    }


    # Get All Cart Items And Send them to Card Blade----------------
    function ShowCartForm(){
        $cart = $this->cart;
        return view('cart',compact('cart'));
    }


    # Add new Items To The Cart *******************************
    function add_to_cart_process(Request $request) {
        $product = Product::findOrFail($request->product_id);
        if (isset($this->cart[$product->id])) {
            $this->cart[$product->id]['qty'] += 1;
        }else{
            $this->cart[$product->id] = [
                'id'        =>  $product->id,
                'name'      =>  $product->name,
                'image'     =>  $product->image,
                'price'     =>  $product->price,
                'qty'       =>  1
            ];
        }
        session()->put('cart',$this->cart);
        
        $this->CalculateCartitemTotal();
        return back()->with('success', 'The  (' .  $this->cart[$product->id]['name'] .') Product : is Already Added to Cart');
    }



# Update items Quantity in the Cart *******************
function updateqty(Request $request){
    $product = Product::findOrFail($request->product_id);
     if (isset($this->cart[$product->id])) {
        $this->cart[$product->id]['qty'] = $request->qty;
        
        session()->put('cart',$this->cart);
        $this->CalculateCartitemTotal();
        return back()->with('success','The  (' .  $this->cart[$product->id]['name'] .') Product : is Already Updated in the Cart');
     }
}




# DELETE Items From the Cart ***********************
function delete_item(Request $request){
     $product = Product::findOrFail($request->product_id);
     if (isset($this->cart[$product->id])) {
        $deleted_item = $this->cart[$product->id]['name'];
        unset($this->cart[$product->id]);
        session()->put('cart',$this->cart);
        $this->CalculateCartitemTotal();
        return back()->with('success','The  (' . $deleted_item   .') Product : is Already Deleted From the Cart');
     }
}


# Clear All Items From the Cart ***********************
function Clear_Cart(){
    session()->forget('cart');
    session()->forget('CartItemTotal');
    return back()->with('success','Your Cart is Already Cleened!');
}





    function CalculateCartitemTotal() {
        
        $total = collect($this->cart)->sum(fn($item) => $item['price'] *  $item['qty']);
        session()->put('CartItemTotal', $total);
    }


}
