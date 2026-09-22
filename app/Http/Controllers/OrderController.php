<?php

namespace App\Http\Controllers;

use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Exception\InvalidRequestException;
use App\Models\StripeSession;
class OrderController extends Controller
{
    private array $cart;
    public function __construct()
    {
        $this->cart = session()->get('cart',[]);
        Stripe::setApiKey('sk_test_51UFACmArQsNuWmy8Z1AQKwBWRtFWlGSrAZUP4o7AHxQFGwRVjotQB0Dk7OdA5hk6byKCp3d9lVRSnYa8xMwoM06D00h7F3sS9k');
    }

    function PayOrderByStripe()
    {
        try {
           $checkout_session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => $this->calculateTotalToPay($this->cart), // Price in cents ($20.00)
                        'product_data' => [
                            'name' => 'Example Product',
                        ],
                    ],
                     'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('order.success') . '?session_id={CHECKOUT_SESSION_ID}',
    
            ]);
          return redirect($checkout_session->url);
       
          } catch (ErrorException $e) {
           Log::error("Stripe Error :" . $e->getMessage());
           return back()->with('error', 'something wrong with payment.! ...please try again');
        }           
    }


    #Calculate The Total to pay
    function CalculateTotalToPay(array $items){
        $Total = 0;
        foreach ($items as $key => $item) {
            $Total += $item['qty'] * $item['price'] ;
        }
        return $Total * 100 ;
    }


    function successPaid(Request $request)
    {
       # $sessionid  =   $request()->get('session_id');
         $sessionid  =   $request->input('session_id');
        // if NO session ID provided then
        if (!$sessionid) {
            return to_route('home');
        }

        //Check if stripe session id already stored : to prevent reuse
        if (StripeSession::where('strip_id', $sessionid)->exists()) {
            return to_route('home')->with('error','this session id has already been used !');
        }

        try{
            Session::retrieve($sessionid);
            // stored session id to prevent reuse
            StripeSession::create(['strip_id' => $sessionid]);

            //Clear the Cart
            session()->forget('cart');
            session()->forget('CartItemTotal');
            return view('success-paid');
        }catch(InvalidRequestException $e){
            return to_route('/home');
        }
    }


}
