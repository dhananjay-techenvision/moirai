<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use redirect;
use Session;
use DB;
use Mail;
use App\User;
use App\Categories;
use App\Product;
use App\Product_Attribute;
use App\Product_Images;
use App\TempCart;
use App\Cart;
use App\Order;
use App\OrderCouponHistory;
use App\OrderItem;
use App\Review;
use Carbon\carbon;
use PDF;

class EcomController extends Controller
{
    public function index(){   
        // return 'hello';
        $data['product'] = Product::join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                                    ->join('product_images', 'products.products_id', '=', 'product_images.products_id')
                                    ->where('products.status',1)
                                    ->select('product_attributes.*', 'product_images.product_image','products.*')
                                    ->groupBy('product_attributes.products_id')
                                    ->orderBy(DB::raw('RAND()'))
                                    ->take(8)
                                    ->get();
        $data['category'] =  Categories::where('status',1)
                                        ->orderBy(DB::raw('RAND()'))
                                        ->take(4)
                                        ->get();
        
     
        // dd($data);
        return view('Website.Ecommerce.Webviews.ecommercehome',$data);
    }

    public function product_listing($id){   
        // return 'hello';
        $data['flag'] = 2; 
        $data['category'] =  Categories::where('status',1)->get();
        $data['current_category'] =  Categories::where('status',1)->where('id', $id)->first();
        $data['product'] = Product::join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                                    ->join('product_images', 'products.products_id', '=', 'product_images.products_id')
                                    ->where('products.status',1)
                                    ->where('products.category_id',$id)
                                    ->select('product_attributes.*', 'product_images.product_image','products.*')
                                    ->groupBy('product_attributes.products_id')
                                    ->orderBy(DB::raw('RAND()'))
                                    ->paginate(8); 

        // dd( $data['product']);
        return view('Website.Ecommerce.Webviews.manage_ecommerce_pages',$data);
    }

    public function product_details($id){   
        // return 'hello';
        $data['flag'] = 3; 
        $data['category'] =  Categories::where('status',1)->get();
        $data['product'] = Product::join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                                    ->join('product_images', 'products.products_id', '=', 'product_images.products_id')
                                    ->where('products.status',1)
                                    ->groupBy('product_attributes.products_id')
                                    ->where('product_attributes.products_id',$id)
                                    ->select('product_attributes.*', 'product_images.product_image','products.*')
                                    ->first();

        $data['related_product'] = Product::join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                                    ->join('product_images', 'products.products_id', '=', 'product_images.products_id')
                                    ->where('products.status',1)                                    
                                    ->select('product_attributes.*', 'product_images.product_image','products.*')
                                    ->groupBy('product_attributes.products_id')
                                    ->orderBy(DB::raw('RAND()'))
                                    ->take(4)
                                    ->get();
        // dd($data['product']);
        return view('Website.Ecommerce.Webviews.manage_ecommerce_pages',$data);
    }
    public function getattributeinfo(Request $req){
        //    return $req;
        $data['attributes'] = Product_Attribute::where('id', $req->attribute_id)->first();
        return $data;
       }


    public function add_to_cart(Request $req){

        $session = Session::getId();
        // dd($req);

        if(Auth::check()){

            $result1=DB::table('carts')->where('product_id',$req->products_id)->where('user_id',Auth::user()->id)->count();

            if($result1 == 0){
                DB::table('carts')->insert([
                    'product_id'=>$req->products_id,
                    'attribute_id'=>$req->attribute_id,
                    'user_id'=> Auth::user()->id,
                    'quantity'=>$req->quantity
                ]);

            }

        }else{
            $result=DB::table('temp_carts')->where('product_id',$req->products_id)->where('session_id',$session)->count();
            if($result == 0){
                DB::table('temp_carts')->insert([
                    'product_id'=>$req->products_id,
                    'attribute_id'=>$req->attribute_id,
                    'session_id'=> $session,
                    'quantity'=>$req->quantity
                ]);
            }
        }

         toastr()->success('Item Added into Cart');
        //return back();
        return Auth::check() ? back() : back();
    }


    public function mycart(){   
        // return 'hello';
        $data['flag'] = 4; 

        $session = Session::getId();
        $r = DB::table('temp_carts')->where('session_id',$session)->select('product_id','attribute_id')->get();
        // dd($r);
        $cart = DB::table('carts')->where('user_id',Auth::id())->select('product_id','attribute_id')->get();
        $count = DB::table('temp_carts')->where('session_id',$session)->count();


        foreach ($r as $key => $r1) {
                $data1[]=DB::table('products')
                ->join('temp_carts', 'products.products_id', '=', 'temp_carts.product_id')
                ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                ->select('products.products_id','products.product_name' ,'product_attributes.price','temp_carts.quantity','temp_carts.temp_carts_id','temp_carts.attribute_id')
                ->where('product_attributes.id',$r1->attribute_id)
                ->first();
            // dd($data1);
        }

        foreach ($cart as $key => $r2) {
            $data1[]=DB::table('products')
            ->join('carts', 'products.products_id', '=', 'carts.product_id')
            ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
            ->select('products.products_id','products.product_name' ,'product_attributes.price','carts.quantity','carts.id','carts.attribute_id')
            ->where('product_attributes.id',$r2->attribute_id)
            ->first();
        // dd($data1);
    }
    
    if (DB::table('temp_carts')->where('session_id',$session)->count()>0) {
        $data['result'] = $data1;
        
       
    }elseif (DB::table('carts')->where('user_id',Auth::id())->count()>0) {
        $data['result'] = $data1;
       
        // dd( $data['result']);
    }else{
        $data['result']='Please Choose To Continue Shopping';
    }
    // dd($data);
        return view('Website.Ecommerce.Webviews.manage_ecommerce_pages',$data);
    }


    public function removeProduct(Request $req){

    	if(Auth::check()){
            $user_id = Auth::user()->id;
             Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)->delete();             
        }else{
            $session = Session::getId();
            TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)->delete();           
        }
        toastr()->error('Product deleted from cart');
    	return 1;
    }

    public function cartUpdate(Request $req){
        // return $req;
    	if(Auth::check()){
            $user_id = Auth::user()->id;
            $cart_info =  Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)->first();  
            // return $user_id;
            if($req->type == 1 ){                
                //  dd($cart_info) ;
                 Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)
                            ->update([
                            'quantity' => $cart_info->quantity + 1,
                        ]); 
            }else{
                      //  dd($cart_info) 
                 Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)
                        ->update([
                        'quantity' => $cart_info->quantity - 1,
                    ]); 
            }
                   
        }else{
            $session = Session::getId();
            $cart_info =  TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)->first();
            
            if($req->type == 1 ){                
                //  dd($cart_info) 
                TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)
                            ->update([
                            'quantity' => $cart_info->quantity + 1,
                        ]); 
            }else{
                      //  dd($cart_info) 
                TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)
                        ->update([
                        'quantity' => $cart_info->quantity - 1,
                    ]); 
            }
        }
        toastr()->success('Cart Updated !');
    	return 1;
    }

    public function checkout(){   
        // return 'hello';
        $data['flag'] = 5; 

        $useraddress = DB::table('user_addresses')->where('user_id' , Auth::user()->id)->orderby('id','desc')->count();
        
        //  dd($useraddress);
         if($useraddress > 0){

                $cart = DB::table('carts')->where('user_id',Auth::id())->select('product_id','attribute_id')->get();
                foreach ($cart as $key => $r2) {
                    $data1[]=DB::table('products')
                    ->join('carts', 'products.products_id', '=', 'carts.product_id')
                    ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                    ->select('products.products_id','products.product_name' ,'product_attributes.price','carts.quantity','carts.id','carts.attribute_id')
                    ->where('product_attributes.id',$r2->attribute_id)
                    ->first();
            }
            if(DB::table('carts')->where('user_id',Auth::id())->count()>0) {
                $data['result'] = $data1;
            }else{
                $data['result']='Please Choose To Continue Shopping';
            }
                return view('Website.Ecommerce.Webviews.manage_ecommerce_pages',$data);

         }else{
            return redirect('My-address');
         }
    }

    // for coupon on  ajax
    public function userMyCartOnAjax(Request $req){

        $dt = Carbon::now()->toDateString();
        // return ($req->coupon_code);
        $coupon1 = DB::table('coupons')->where('copoun_code',$req->coupon_code)->where('from', '<=', $dt)->where('to', '>=', $dt)->first();

        $coupon_count = DB::table('coupons')->where('copoun_code',$req->coupon_code)->value('no_of_uses');
        // return ($coupon_count);
        if (Auth::check()) {
           $match = DB::table('order_coupon_histories')->where('coupon_code',$req->coupon_code)->where('user_id',Auth::user()->id)->get();
            $match_count = $match->count();
            // return $match_count;
        }

        if($coupon1 != Null){
            if($match_count < $coupon_count ){
                $copoun_name = $coupon1->copoun_name;
                $data['result1']="$copoun_name Applied";
                $data['type'] = $coupon1->type;
                $type = $coupon1->type;
                $cc = $coupon1->amount;
                $copoun_code = $coupon1->copoun_code;
                $coupondata = array('copoun_code'=>$copoun_code, 'type'=>$type, 'amount'=>$cc);
                // return $coupondata;
                //$req->session()->put('couponData', $coupondata);
            	Session::put('couponData', $coupondata);
                 Session::save();
                echo 1;
            }else{
                $data['result1']='Your coupon code limit exceed.';
            	echo 2;
            }
        }
        else{
            $data['result1']='';
        	echo 3;
        }
        exit;
     }

     public function removeCoupon(Request $req)
    {
    	Session::forget('couponData');
        Session::save();
    	echo '1'; exit;
    }

    public function checkoutSubmit(Request $req)
    {
        // dd($req);
        $this->validate($req,[
            'address_id'=>'required',
            'total_amount'=>'required',
            'payment_mode'=>'required',
         ]);

         $cart = DB::table('carts')->where('user_id',Auth::id())->count();
         $cartTotal = 0;
         if(!empty(Auth::id())) {
             $cartTotal = DB::Select(DB::raw('SELECT sum(c.quantity*a.price) as cartTotal FROM `carts` as c inner join products as p on c.product_id = p.products_id inner join product_attributes as a on p.products_id = a.products_id WHERE c.user_id='.Auth::id()));
         }
         $total1 = (!empty($cartTotal[0]->cartTotal)?$cartTotal[0]->cartTotal:0);
        //  dd($total1);

        if ($req->address_id) {

                $total_amount1=0;
                $total_amount=0;
                $tamount = 0;
                $total_amount_with_shipping = 0;

                $data=Cart::where('user_id',Auth::user()->id)->get();
                $address = DB::table('user_addresses')->where('id',$req->address_id)->first();
               
                $order_id = "moirai".Auth::user()->id.time();

                $reg = new Order;
                $reg->user_id = Auth::user()->id;
                $reg->order_id = $order_id;
                $reg->address_id = $req->address_id;
                $reg->order_status = 1; 
                $reg->payment_status  = 'Success';             
                $reg->payment_mode = $req->payment_mode;
                $reg->save();

                $count=0;
                $prod_name = [];
                $sub = [];
                $extra_discount_1 = 0;
                $totaltype1Amount = 0;
                $totaltype1Amt = 0;
                $total_discount = 0;

                foreach ($data as $r) {
                        $sub_order_id = "moirai".Auth::user()->id.$count.time();
                        $reg1 = new OrderItem;
                        $reg1->order_id = $reg->order_id;
                        $reg1->sub_order_id = $sub_order_id;
                    	
                        $reg1->prod_name = Product::where('products_id',$r->product_id)->pluck('product_name')->first();
                        $reg1->prod_id = $r->product_id;
                        $reg1->attribute_id = $r->attribute_id;
                        $reg1->quantity =$r->quantity;
                        $price=Product::where('product_attributes.id',$r->attribute_id)->leftjoin('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')->pluck('price')->first();
                        // echo $r->quantity;
                            $reg1->sub_total=$price;
                            $total_amount+=$price*$r->quantity;
                            $totaltype1Amount+=$price  * $r->quantity;
                            $totaltype1Amount = $totaltype1Amount - $extra_discount_1;
                        
                        $reg1->order_status = 1;
                        $prod_name[] = $reg1->prod_name;
                        $sub[] = $reg1->sub_total;                    
                	 $vendor[] = $reg1->assign_vendor_id;
                    $reg1->save();
                     $count++;
                }

                $coupon = Session::get('couponData')?Session::get('couponData')['amount']:0;
                    
                $null_session= Session::get('couponData');
                if($null_session != null){
                    $code_coupon = Session::get('couponData')['copoun_code']; 
                }else{
                    $code_coupon = 0;
                }
                // $code_coupon = Session::get('couponData')['copoun_code']?:0;
                // dd($code_coupon);
                $type = Session::get('couponData')?Session::get('couponData')['type']:0;
                // $coupon =null;
                if($coupon != null){
                    if($type =='0'){
                        $tamount+= $total_amount - $coupon;

                    }elseif($type =='1'){
                        $disamt = $total_amount ;
                        $tamount+= $disamt - ($disamt * $coupon / 100);
                        $totaltype1Amount = $totaltype1Amount - ($totaltype1Amount * $coupon/ 100);                       
                    }
                }else{
                    $tamount+= $total_amount ;
                }
                // dd($tamount);

                if($tamount <= 500 ){
                    $shipping_percent = 50;
                }else{
                    $shipping_percent = 0;
                }
                $t_amount_with_shipping = $tamount + $shipping_percent;
                $total_amount_with_shipping = round($t_amount_with_shipping, 2);
                // dd($shipping_percent);
                $coupon_history = new OrderCouponHistory;
                $coupon_history->user_id = Auth::user()->id;
                $coupon_history->order_id = $reg->order_id;
                $coupon_history->coupon_price = $coupon;
                $coupon_history->coupon_code = $code_coupon;
                $coupon_history->coupon_type = $type;
                $coupon_history->save();

                DB::table('orders')->where('order_id', $order_id)->update([
                    'shipping_charge' => round($shipping_percent, 2),
                    'amount' =>  round($total_amount_with_shipping,2),
                ]);
                Cart::where('user_id',Auth::user()->id)->delete();
                Session::forget('couponData');

                if($req->payment_mode=='1'){

                    // return redirect('confirm-order/'.$reg->order_id);  enable when payment gateway interation done
                
                    return redirect('order-success/'.$reg->order_id);

                }
        }

    }

    public function orderSuccessPage($order_id){
        $data['flag']=6;
        $data['booking'] = Order::where('order_id',$order_id)->first();    	
        return view('Website.Ecommerce.Webviews.manage_ecommerce_pages',$data);
    }

    public function order_list(){
        $data['flag']=7;
        $data['order'] = Order::where('user_id',Auth::user()->id)->get();   	
        // dd($data);
        return view('Website.Ecommerce.Webviews.manage_ecommerce_pages',$data);
    }

    public function userOrderDetail($id){
        $data['flag']=8;
        $data['order'] = OrderItem::where('order_id',$id)->orderBy('id','desc')->get();
        return view('Website.Ecommerce.Webviews.manage_ecommerce_pages',$data);
    }

    public function downloadUserInvoice($order_id){ 
        // dd($order_id);
        $orderDetails = DB::table('orders')->where('order_id', $order_id)->first();
       //  $orders = OrderItem::where('order_id',$order_id)->get(); 
       $orders = DB::table('order_items')
            ->join('orders', 'orders.order_id', '=', 'order_items.order_id')            
            ->join('product_attributes','product_attributes.id','=','order_items.attribute_id')                       
            ->join('products', 'products.products_id', '=', 'product_attributes.products_id')
            ->select('order_items.prod_name','product_attributes.price','order_items.sub_total','order_items.prod_id','order_items.quantity','orders.amount','orders.order_id','orders.created_at')
            ->where('orders.order_id','=', $order_id)
            ->get();
        // dd($orders);
           $billing_user_info = DB::table('user_addresses')->where('id',$orderDetails->address_id)->first();  
       $data['orderDetails'] = $orderDetails;
       $data['order'] = $orders;
       $data['billing_user_info'] = $billing_user_info;
    //    dd($data);
       $pdf = PDF::loadView('Website/Ecommerce/Components.download_invoice', $data);
       return $pdf->download("$order_id.pdf");

        // for view without download use stream methode 
    //    return $pdf->stream();
       // return view('UI/webviews.download_invoice_web',$data);
   }

   public function addReviewComment(Request $req){
    //    dd($req);

    $review_count = Review::where(['user_id'=>Auth::id(),'product_id'=>$req->product_id])->get();
    // dd($review_count->count());

    if ($review_count->count() >= 1) {
        toastr()->error('You already given review');
        return back();
    }
    else{
        $reg = new Review;
        $reg->user_id = Auth::id();
        $reg->product_id = $req->product_id;
        $reg->comment = $req->comment;
        $reg->rating = $req->rating;
        $reg->save();
        toastr()->success('submited review successfully!');
        return back();
    }
}
    
}
