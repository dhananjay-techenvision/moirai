<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserDetails;
use Auth;
use redirect;
use Session;
use DB;

class MainController extends Controller
{
    public function index(){
        return view('Website/index');
    }

    public function homepage(){
        return view('Website/home');
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
