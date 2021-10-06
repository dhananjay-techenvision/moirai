<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Product_Attribute;
use App\Product_Images;
use App\Categories;
use App\Vendor;
use Auth;

class OrderController extends Controller
{
    
    public function view_product()
    {
        $data['product'] =  Product::join('product_attributes','product_attributes.products_id','=','products.products_id')->get();
        $data['flag'] = 1; 
        $data['page_title'] = 'View Product List'; 
        // dd($data['product']);
        return view('Admin/webviews/manage_order_pages',$data);
    } 

    public function update_product_status($id, $status){ 
        Product_Attribute::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('Product Deleted Updated!');
        return redirect('admin-view-product');
    }
}
