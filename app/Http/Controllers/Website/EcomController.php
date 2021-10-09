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
        $r = DB::table('temp_carts')->where('session_id',$session)->select('product_id')->get();
        $cart = DB::table('carts')->where('user_id',Auth::id())->select('product_id','attribute_id')->get();
        $count = DB::table('temp_carts')->where('session_id',$session)->count();


        foreach ($r as $key => $r1) {
                $data1[]=DB::table('products')
                ->join('temp_carts', 'products.products_id', '=', 'temp_carts.product_id')
                ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                ->select('products.products_id','products.product_name' ,'product_attributes.price','temp_carts.quantity','temp_carts.temp_carts_id')->where('products.products_id',$r1->product_id)
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


}
