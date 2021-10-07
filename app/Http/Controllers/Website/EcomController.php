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
}
