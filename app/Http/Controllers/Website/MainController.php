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


class MainController extends Controller
{
    public function index(){
        return view('Website/index');
    }

    public function homepage(){
        $data['banners'] =  Banner::where('status',1)->get();
        $data['sub_section'] = Sub_section::join('main_section', 'main_section.id', '=', 'sub_section.main_section_id')->where('sub_section.status',1)->get(); 
        $data['main_section'] = Main_section::where('status',1)->get(); 
        $data['what_is_section'] = WhatisSection::where('status',1)->get(); 
        $data['footer_banner'] =  Footer_Banner::where('status',1)->orderBy('id', 'DESC')->first();
        $data['footer_slider'] =  Footer_Slider::where('status',1)->get();
        // $data['main_section'] =  Main_section::join('sub_section', 'sub_section.main_section_id', '=', 'main_section.id')->get();

        // $data = array('name'=>"Testing");
   
        // Mail::send(['text'=>'mail'], $data, function($message) {
        //    $message->to('dhananjay.techenvision@gmail.com', 'testing')->subject
        //       ('Laravel Basic Testing Mail');
        //    $message->from('moirai@1618033.in','Testing');
        // });

        // $to = "dhananjay.techenvision@gmail.com";
        // $subject = "This is subject";
        
        // $message = "<b>This is HTML message.</b>";
        // $message .= "<h1>This is headline.</h1>";
        
        // $header = "From:moirai@1618033.in \r\n";
        // $header .= "MIME-Version: 1.0\r\n";
        // $header .= "Content-type: text/html\r\n";
        
        // $retval = mail ($to,$subject,$message,$header);

        // dd($data['sub_section']);
        return view('Website/home',$data);
    }

    public function login(){
        return view('Website/login');
    }
    public function register(){
        return view('Website/register');
    }

    public function register_submit(Request $req){
                // dd($req);
                $data = new User;
                $data->name=$req->name;
                $data->email=$req->email;
                $data->phone=$req->phone;
                $data->password= Hash::make($req->password);
                $data->user_type=$req->user_type;
                $is_saved = $data->save();
                toastr()->success('Register successfully');
                return redirect('Web-login');
    }

    public function home(){
        return view('Website/index');
    }

    public function login_submit(Request $req){
        // dd($req);

        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required'        
        ]);

        $data['email'] = $req->get('email');
        $data['password'] = $req->get('password');
        // dd($data['password']);
        if(Auth::attempt($data)){
            // dd($req);
            toastr()->success('login successfully');
                return redirect('/');
        }else{
            toastr()->error('Email Id Or Password not match');
            return back();
        }

    }

    public function profile(){
        $user_id = Auth::user()->id; 
        $data['user']= User::where('id',$user_id)->first();
        // dd($data);
        return view('Website/user_profile',$data);
    }

    public function edit_profile($id){
        $user_id = Auth::user()->id; 
        $data['user']= User::where('id',$user_id)->first();
        $data['user_profile'] = UserDetails::where('user_id',$user_id)->first();
        // dd($data['user']);
        return view('Website/edit_profile',$data);
    }

    public function submit_profile(Request $req)
    {
    //    dd($req);

        $this->validate($req,[
            'name'=>'required',                  
         ]);

         if($req->user_id) { 
            // dd($req);
            User::where('id',$req->user_id)->update([
                'name' => $req->name,
                'email' => $req->email,
                'phone' => $req->phone,
            ]);

            $user_details_info = UserDetails::where('user_id',$req->user_id)->count();
            // dd($user_details_info);
            if($user_details_info > 0 ){
                // dd($user_details_info);
                if($req->hasFile('profile_pic_new')) {
                    $file = $req->file('profile_pic_new');
                    $filename = 'profile_pic'.time().'.'.$req->profile_pic_new->extension();
                    $destinationPath = public_path('/images/profile');
                    $file->move($destinationPath, $filename);
    
                    UserDetails::where('user_id',$req->user_id)->update([
                        'profile_photo' => 'images/profile/'.$filename,
                    ]);
                 }
                toastr()->success('User Updated Successfully!');
                return redirect('My-profile');

            }else{
                // dd($req);
                $data = new UserDetails;
                $data->user_id=$req->user_id;            
                // $data->status=$req->status;             
                $result = $data->save();

                if($req->hasFile('profile_pic_new')) {
                    $file = $req->file('profile_pic_new');
                    $filename = 'profile_pic'.time().'.'.$req->profile_pic_new->extension();
                    $destinationPath = public_path('/images/profile');
                    $file->move($destinationPath, $filename);
    
                    UserDetails::where('user_id',$req->user_id)->update([
                        'profile_photo' => 'images/profile/'.$filename,
                    ]);
                 }
                 toastr()->success('User Updated Successfully!');
                 return redirect('My-profile');
            }


           

         }else{
 
                $data = new Subject;
                $data->user_id=$req->user_id;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Subject Successfully Added!');
            }
            else
            {
                toastr()->error('Subject Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-subject');

        }
    }


    
    
}
