<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use redirect;
use Session;
use DB;
use Mail;
use App\User;
use App\Banner;
use App\UserDetails;
use App\Main_section;
use App\Sub_section;
use App\WhatisSection;
use App\Footer_Banner;
use App\Footer_Slider;
use App\State;
use App\Tabs;
use App\PostContent;
use App\Post_likes;
use App\Postcomment;
use App\Categories;
use App\Vendor;
use Carbon\carbon;

class VendorController extends Controller
{
    //
    public function approve_vendor(){

        $data['flag'] = 1;  
        $user_id = Auth::user()->id; 
        $data['user']= User::where('id',$user_id)->first(); 
        $data['user_profile'] = UserDetails::where('user_id',$user_id)->first();  
        $data['category'] =  Categories::get();
        $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('user_id', $user_id)->where('post_content.status', 1)->orderBy('post_content.created_at', 'desc')->get();
        $data['state_list']= State::get();
        return view('Website/Webviews/manage_pages',$data);

    }


    public function submit_vendor(Request $req){

        // dd($req);

        $this->validate($req,[
            'category_id'=>'required',       
            'user_id'=>'required|numeric'             
         ]);

         $user_info = User::where('id',$req->user_id)->first();
        //  dd($user_info);

         if($req->vendor_id) { 
            // dd($req);
            Vendor::where('id',$req->vendor_id)->update([
                'category_id' => $req->category_id,
                'aadhar_card' => $req->aadhar_card,
                'pan_number' => $req->pan_number,
                'business_name' => $req->business_name,
                'gst_number' => $req->gst_number,
                'bank_name' => $req->bank_name,
                'account_name' => $req->account_name,
                'account_number' => $req->account_number,
                'ifsc_number' => $req->ifsc_number,
                'upi_id' => $req->upi_id,
                'address' => $req->address,
                'city' => $req->city,
                'pin_code' => $req->pin_code,
                'state' => $req->state,
                'description' => $req->description,
            ]);
            toastr()->success('Information updated');
            return redirect('My-profile');

         }else{

                $data = new Vendor;
                $data->user_id=$req->user_id;
                $data->vendor_name=$user_info->name;
                $data->category_id=$req->category_id;
                $data->aadhar_card=$req->aadhar_card;
                $data->pan_number=$req->pan_number;
                $data->business_name=$req->business_name;
                $data->gst_number=$req->gst_number;
                $data->bank_name=$req->bank_name;
                $data->account_name=$req->account_name;            
                $data->account_number=$req->account_number;
                $data->ifsc_number=$req->ifsc_number;    
                $data->upi_id=$req->upi_id;            
                $data->address=$req->address;
                $data->city=$req->city;
                $data->pin_code=$req->pin_code;            
                $data->state=$req->state;
                $data->email=$user_info->email;    
                $data->mobile=$user_info->phone;            
                $data->description=$req->description;  
                $data->status= '0';            
                $result = $data->save();
            if($result)
            {
                toastr()->success('Request Send To Approval');
            }
            else
            {
                toastr()->error('Something Went Wrong!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('My-profile');
        }

    }

    public function vendor_info(){

        $data['flag'] = 2;  
        $user_id = Auth::user()->id; 
        $data['user']= User::where('id',$user_id)->first();
        $data['vendor']= Vendor::where('user_id',$user_id)->first(); 
        $data['user_profile'] = UserDetails::where('user_id',$user_id)->first();  
        $data['category'] =  Categories::get();
        $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('user_id', $user_id)->where('post_content.status', 1)->orderBy('post_content.created_at', 'desc')->get();
        $data['state_list']= State::get();
        return view('Website/Webviews/manage_pages',$data);

    }

    
}
