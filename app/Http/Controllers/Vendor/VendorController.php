<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class VendorController extends Controller
{
    
    public function dashboard(Request $request)
    {
        $data['flag'] = 1; 
        $data['page_title'] = 'View Vendor'; 
        return view('Vendor/webviews/manage_vendor_pages',$data);
    } 
}
