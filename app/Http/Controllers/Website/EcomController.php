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

class EcomController extends Controller
{
    public function index(){   
        // return 'hello';
        $data['category'] =  Categories::where('status',1)->get();
        return view('Website.Ecommerce.Webviews.ecommercehome',$data);
    }
}
