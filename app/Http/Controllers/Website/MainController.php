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
use App\TempCart;
use App\Cart;
use App\UserAddress;
use Carbon\carbon;


class MainController extends Controller
{
    public function index(){
            // $user_id = Auth::user()->id;
            // $data['user']= User::where('id',$user_id)->first();
            $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('post_content.status', 1)->orderBy('post_content.created_at', 'desc')->get();
            // dd($data['post_content']);
            $data['tabs'] =  Tabs::get();
            $data['category'] =  Categories::get();
        return view('Website/index',$data);
    }

        public function getPostBycategory($id){
            // dd($id);
            $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('post_content.category_id', $id)->where('post_content.status', 1)->orderBy('post_content.created_at', 'desc')->get();
            // dd($data['post_content']);
            $data['tabs'] =  Tabs::get();
            $data['category'] =  Categories::get();
        return view('Website/index',$data);
    }

    public function view_post($id){
        $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('post_content.status', 1)->orderBy('post_content.created_at', 'desc')->where('post_content.id', $id)->get();
        $data['tabs'] =  Tabs::get();
        $data['category'] =  Categories::get();
        $data['comments'] = DB::table('comments')->join('user_profile', 'user_profile.user_id', '=', 'comments.user_id')->select('comments.*','user_profile.profile_photo')->where('post_id',$id)->orderBy('comments.id', 'DESC')->get();
        return view('Website/viewpost',$data);
}

    public function getPostByTab($tab){
        // dd($tab);
        if($tab == 'fresh'){
            $data['category'] =  Categories::get();
            $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('post_content.status', 1)->where('post_content.created_at', '>', Carbon::now()->subHours(6)->toDateTimeString())->orderBy('post_content.created_at', 'desc')->get();
        }elseif($tab == 'trending'){   
           
            // $data['post_content'] = PostContent::join('rating_info', 'rating_info.post_id', '=', 'post_content.id')->select('post_content.*')->where('post_content.status', 1)->where('post_content.created_at', '>', Carbon::now()->subHours(824)->toDateTimeString())->groupBy('rating_info.post_id')->orderBy('rating_info.created_at', 'desc')->take($new_width)->get();
            
            // $data['post_content'] = PostContent::join('rating_info', 'rating_info.post_id', '=', 'post_content.id')->select('post_content.*', DB::Raw('count(rating_info.*) as likes_count')->where('post_content.status', 1)->where('post_content.created_at', '>', Carbon::now()->subHours(824)->toDateTimeString())->groupBy('rating_info.post_id')->orderBy('rating_info.created_at', 'desc')->take($new_width)->get();
            
            $trending = PostContent::select('post_content.*', DB::Raw('COUNT(rating_info.post_id) as likes_count'))
                                    ->leftJoin('rating_info', 'rating_info.post_id', '=', 'post_content.id')
                                    ->groupBy('rating_info.post_id')
                                    ->orderBy('likes_count', 'DESC')
                                    ->where('post_content.created_at', '>', Carbon::now()->subHours(824)->toDateTimeString())                                    
                                    ->get();

            $new_limit = round(( 20/ 100) * $trending->count(), 0);

            $data['post_content'] = PostContent::select('post_content.*', DB::Raw('COUNT(rating_info.post_id) as likes_count'))
                                    ->leftJoin('rating_info', 'rating_info.post_id', '=', 'post_content.id')
                                    ->groupBy('rating_info.post_id')
                                    ->orderBy('likes_count', 'DESC')
                                    ->where('post_content.created_at', '>', Carbon::now()->subHours(824)->toDateTimeString())                                    
                                    ->take($new_limit)
                                    ->get(); 
        //    dd($data['post_content']);
        }elseif($tab == 'hot'){            
            $hot = PostContent::select('post_content.*', DB::Raw('COUNT(rating_info.post_id) as likes_count'))
            ->leftJoin('rating_info', 'rating_info.post_id', '=', 'post_content.id')
            ->groupBy('rating_info.post_id')
            ->orderBy('likes_count', 'DESC')
            ->where('post_content.created_at', '>', Carbon::now()->subHours(824)->toDateTimeString())                                    
            ->get();

            $new_limit = round(( 20/ 100) * $hot->count(), 0);

            $data['post_content'] = PostContent::select('post_content.*', DB::Raw('COUNT(rating_info.post_id) as likes_count'))
                        ->leftJoin('rating_info', 'rating_info.post_id', '=', 'post_content.id')
                        ->groupBy('rating_info.post_id')
                        ->orderBy('likes_count', 'DESC')
                        ->where('post_content.created_at', '>', Carbon::now()->subHours(824)->toDateTimeString())                                    
                        ->take($new_limit)
                        ->get(); 
        }elseif($tab == 'best-in-india'){

                    $best_india = PostContent::select('post_content.*', DB::Raw('COUNT(rating_info.post_id) as likes_count'))
                    ->leftJoin('rating_info', 'rating_info.post_id', '=', 'post_content.id')
                    ->groupBy('rating_info.post_id')
                    ->orderBy('likes_count', 'DESC')
                    ->where('post_content.created_at', '>', Carbon::now()->subMonths(2)->toDateTimeString())                                    
                    ->get();

                    $new_limit = round(( 20/ 100) * $best_india->count(), 0);

                    $data['post_content'] = PostContent::select('post_content.*', DB::Raw('COUNT(rating_info.post_id) as likes_count'))
                                ->leftJoin('rating_info', 'rating_info.post_id', '=', 'post_content.id')
                                ->groupBy('rating_info.post_id')
                                ->orderBy('likes_count', 'DESC')
                                ->where('post_content.created_at', '>', Carbon::now()->subHours(824)->toDateTimeString())                                    
                                ->take($new_limit)
                                ->get();
        }else{
            $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('post_content.status', 1)->orderBy('created_at', 'desc')->get();
        }
        $data['category'] =  Categories::get();
        $data['tabs'] =  Tabs::get();
    return view('Website/index',$data);
}

    public function homepage(){
        $data['banners'] =  Banner::where('status',1)->get();
        $data['sub_section'] = Sub_section::join('main_section', 'main_section.id', '=', 'sub_section.main_section_id')->where('sub_section.status',1)->get(); 
        $data['main_section'] = Main_section::where('status',1)->get(); 
        $data['what_is_section'] = WhatisSection::where('status',1)->get(); 
        $data['footer_banner'] =  Footer_Banner::where('status',1)->orderBy('id', 'DESC')->first();
        $data['footer_slider'] =  Footer_Slider::where('status',1)->get();
        $data['category'] =  Categories::where('status',1)->get();
        $data['tabs'] =  Tabs::get();
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

    public function verify_email($email, $token){
        $user = User::where('email',$email)->where('token',$token)->first();

        if($user->count() > 0 ){
            User::where('id',$user->id)->update([
                'token' => $token,
                'account_verify' => 1,
            ]);
            toastr()->success('Account Verify Successfully');
            return redirect('/');
        }else{
            toastr()->error('Account Not Verified');
            return redirect('/');
        }
       
    }

    public function login(){
        return view('Website/login');
    }
    public function register(){
        return view('Website/register');
    }

    public function register_submit(Request $req){
                // dd($req);
                $token = rand (1000, 9999);
                $data = new User;
                $data->name=$req->name;
                $data->email=$req->email;
                $data->phone=$req->phone;
                $data->token=$token;
                $data->password= Hash::make($req->password);
                $data->user_type=$req->user_type;
                $is_saved = $data->save();

                 $to = $req->email;
                $subject = "Email Verification From Moirai";
                
                $message = "<b>Please Click Link Below To Verify Your Account</b>";
                $message .= "Your email verification link  is  : https://1618033.in/admin_moirai/public/emailverify/".$req->email."/".$token." Thank You ";
                
                $header = "From:moirai@1618033.in \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";
                
                $retval = mail ($to,$subject,$message,$header);
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

        $session = Session::getId();
        $cart = TempCart::where('session_id',Session::getId())->get();
       $data = [];

        $data['email'] = $req->get('email');
        $data['password'] = $req->get('password');
        // dd($data['password']);
        if(Auth::attempt($data)){
            // dd($req);
            foreach ($cart as $r){
                $result1=DB::table('carts')->where('product_id',$r->product_id)->where('user_id',Auth::user()->id)->first();
                     if($result1 == null){
                         $data = new Cart;
                         $data->user_id= Auth::user()->id;
                         $data->product_id= $r->product_id;
                         $data->attribute_id= $r->attribute_id;
                         $data->quantity=  $r->quantity;
                         $data->save();
                     }
                     TempCart::where('session_id',$r->session_id)->delete();
             }

            toastr()->success('login successfully');
                return redirect('/');
        }else{
            toastr()->error('Email Id Or Password not match');
            return back();
        }

    }

    public function profile(){
        $verified_email = Auth::user()->account_verify;
        // dd($verified_email);
        if($verified_email == 0){
            toastr()->error('please verify Your Email Account ');
            return redirect('/');
        }else{
            $user_id = Auth::user()->id; 
            $data['user']= User::where('id',$user_id)->first();
            $user_id = Auth::user()->id; 
            $data['user']= User::where('id',$user_id)->first();
            $data['user_profile'] = UserDetails::where('user_id',$user_id)->first();
            $data['post_content'] = PostContent::join('users', 'users.id', '=', 'post_content.user_id')->select('post_content.*','users.name')->where('user_id', $user_id)->where('post_content.status', 1)->orderBy('post_content.created_at', 'desc')->get();
            $data['state_list']= State::get();
            $data['category'] =  Categories::get();
            // dd($data['post_content']);
            return view('Website/user_profile',$data);
        }
       
    }

    public function edit_profile($id){
        $user_id = Auth::user()->id; 
        $data['user']= User::where('id',$user_id)->first();
        $data['user_profile'] = UserDetails::where('user_id',$user_id)->first();
        $data['state_list']= State::get();
        
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

                UserDetails::where('user_id',$req->user_id)->update([
                    'state' => $req->state,
                    'city' => $req->city,
                ]);

                if($req->hasFile('profile_pic_new')) {
                    $file = $req->file('profile_pic_new');
                    $filename = 'profile_pic'.time().'.'.$req->profile_pic_new->extension();
                    $destinationPath = public_path('/images/profile');
                    $file->move($destinationPath, $filename);
    
                    UserDetails::where('user_id',$req->user_id)->update([
                        'profile_photo' => 'images/profile/'.$filename,
                    ]);
                 }
                 if($req->hasFile('timeline_picture_new')) {
                    $file = $req->file('timeline_picture_new');
                    $filename = 'timeline_picture'.time().'.'.$req->timeline_picture_new->extension();
                    $destinationPath = public_path('/images/timeline');
                    $file->move($destinationPath, $filename);
    
                    UserDetails::where('user_id',$req->user_id)->update([
                        'timeline_picture' => 'images/timeline/'.$filename,
                    ]);
                 }
                toastr()->success('User Updated Successfully!');
                return redirect('My-profile');

            }else{
                // dd($req);
                $data = new UserDetails;
                $data->user_id=$req->user_id;            
                $data->state=$req->state;   
                $data->city=$req->city;   
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
                 if($req->hasFile('timeline_picture_new')) {
                    $file = $req->file('timeline_picture_new');
                    $filename = 'timeline_picture'.time().'.'.$req->timeline_picture_new->extension();
                    $destinationPath = public_path('/images/timeline');
                    $file->move($destinationPath, $filename);
    
                    UserDetails::where('user_id',$req->user_id)->update([
                        'timeline_picture' => 'images/timeline/'.$filename,
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

        public function post_submit(Request $req){   
                // dd($req);

                $user_id = Auth::user()->id;
                

                if($req->post_id){

                    $req->validate([
                        'title'=> 'required'
                    ]); 

                    if($req->hasFile('post_content_new')) {

                        $allowedimageExtension=['jpeg','jpg','png','svg'];
                        $allowedvideoExtension=['mp4'];
    
                        $file = $req->file('post_content_new');
                        $extension = $file->getClientOriginalExtension();
                        $checkimage=in_array($extension,$allowedimageExtension);
                        $checkvideo=in_array($extension,$allowedvideoExtension);
    
    
                        if($checkimage){
                            $filename = 'post_image'.time().'.'.$req->post_content_new->extension();
                        $destinationPath = public_path('/images/post/images');
                        $file->move($destinationPath, $filename);
                        $image = 'images/post/images/'.$filename;                        
                        PostContent::where('id',$req->post_id)->update([
                            'user_id' => $user_id,
                            'title' => $req->title,
                            'description' => $req->description,
                            'category_id' => $req->category_id,
                            'post_image' => $image,
                            'post_video' => null,
                            'status' => 1,
                        ]);                        
                        toastr()->success('Post Edited!');
                        return redirect('My-profile');
                        }elseif($checkvideo){
    
                            $filename = 'post_video'.time().'.'.$req->post_content_new->extension();
                        $destinationPath = public_path('/images/post/video');
                        $file->move($destinationPath, $filename);
                        $image = 'images/post/video/'.$filename;
    
                        PostContent::where('id',$req->post_id)->update([
                            'user_id' => $user_id,
                            'title' => $req->title,
                            'description' => $req->description,
                            'category_id' => $req->category_id,
                            'post_video' => $image,
                            'post_image' => null,
                            'status' => 1,
                        ]); 
                        
                        toastr()->success('Post Edited!');
                        return redirect('My-profile');
    
                        }else{
                            toastr()->error('Post Not uploded!');
                            return redirect('My-profile');
                        }
                    }else{
                        PostContent::where('id',$req->post_id)->update([
                            'user_id' => $user_id,
                            'title' => $req->title,
                            'description' => $req->description,
                            'category_id' => $req->category_id,
                            'status' => 1,
                        ]); 
                        toastr()->success('Post Edited !');
                        return redirect('My-profile');
                    } 


                }else{   
                    
                    $req->validate([
                        'title'=> 'required',   
                        'post_content'=> 'required'
                    ]); 

                if($req->hasFile('post_content')) {

                    $allowedimageExtension=['jpeg','jpg','png','svg'];
                    $allowedvideoExtension=['mp4'];

                    $file = $req->file('post_content');
                    $extension = $file->getClientOriginalExtension();
                    $checkimage=in_array($extension,$allowedimageExtension);
                    $checkvideo=in_array($extension,$allowedvideoExtension);


                    if($checkimage){
                        $filename = 'post_image'.time().'.'.$req->post_content->extension();
                    $destinationPath = public_path('/images/post/images');
                    $file->move($destinationPath, $filename);
                    $image = 'images/post/images/'.$filename;
                    
                    $data = new PostContent();
                    $data->user_id = $user_id;  
                    $data->title = $req->title;
                    $data->description = $req->description;
                    $data->category_id = $req->category_id;  
                    $data->post_image  = $image;
                    $data->status = 1;
                    $data->save();
                    toastr()->success('Post Uploded Successfully!');
                    return redirect('My-profile');
                    }elseif($checkvideo){

                        $filename = 'post_video'.time().'.'.$req->post_content->extension();
                    $destinationPath = public_path('/images/post/video');
                    $file->move($destinationPath, $filename);
                    $image = 'images/post/video/'.$filename;

                    $data = new PostContent();
                    $data->user_id = $user_id;  
                    $data->title = $req->title;
                    $data->description = $req->description;  
                    $data->category_id = $req->category_id;
                    $data->post_video  = $image;
                    $data->status = 1;
                    $data->save();

                    toastr()->success('Post Uploded Successfully!');
                    return redirect('My-profile');

                    }else{
                        toastr()->error('Post Not uploded!');
                        return redirect('My-profile');
                    }
                } 
            }
        }

        

        public function user_like_post(Request $req)
        {

            $check_if_already_likes = DB::table('rating_info')                                       
                                        ->where('user_id', $req->user_id)
                                        ->where('post_id', $req->post_id)
                                        ->count();

            if($check_if_already_likes > 0 )
            {
                $post_like = DB::table('rating_info')                                       
                            ->where('post_id', $req->post_id)
                            ->where('rating_action' , 1)
                            ->count();
                return response()->json($data = [
                    'status' => 200,
                    'msg' => 'success',
                    'result' => $post_like,            
                ]);

            }else{
                $data = new Post_likes();
                $data->user_id = $req->user_id; 
                $data->user_ip_address=$req->ip();
                $data->post_id = $req->post_id;
                $data->rating_action = 1;  
                $data->save();

                $post_like = DB::table('rating_info')                                       
                            ->where('post_id', $req->post_id)
                            ->where('rating_action' , 1)
                            ->count();
                return response()->json($data = [
                    'status' => 200,
                    'msg' => 'success',
                    'result' => $post_like,            
                ]);
            }
            
        }

        public function comments_submit(Request $req){   
            // dd($req);
            $user_id = Auth::user()->id;
            $req->validate([
                'comment'=> 'required',
            ]);           
                $data = new Postcomment();
                $data->user_id = $user_id;  
                $data->user_ip_address = $req->ip();
                $data->post_id = $req->post_id;  
                $data->comment  = $req->comment;
                $data->status = 1;
                $data->save();
                return back();
            
            }


                public function delete_post($id){
                    $data['result'] =    PostContent::where('id',$id)->update([
                        'status' => 0,
                    ]);
                    toastr()->error('Post Deleted !');
                    return redirect('My-profile');
            }

        public function edit_post($id){
            $user_id = Auth::user()->id; 
            $data['user']= User::where('id',$user_id)->first();
            $data['tabs'] =  Tabs::get();
            $data['category'] =  Categories::get();
            $data['post_content'] = PostContent::where('id',$id)->first();
        
            // dd($data['post_content']);
            return view('Website/edit_post',$data);
        }



        public function my_address(){   
            $user_id = Auth::user()->id; 
            $data['useraddress']= UserAddress::where('user_id',$user_id)->get();
            $data['state_list']= State::get();
            return view('Website.user_address',$data);
        }

        public function userAddressEdit($id){  
            $data['useraddress']= UserAddress::where('id',$id)->first();
            $data['state_list']= State::get();
            return view('Website.userAddressEdit',$data);
        }

        public function userAddressSubmit(Request $req){

            // dd($req);

            if($req->address_id){
                // dd($req);
                $data = Auth::id();
                UserAddress::where('id',$req->address_id)->update([
                    'user_id' => Auth::id(),
                    'name' => $req->name,
                    'phone' => $req->phone,
                    'email' => $req->email,
                    'address' => $req->address,
                    'apartment' => $req->apartment,
                    'city' => $req->city,
                    'state' => $req->state,
                    'pin_code' => $req->pin_code,
                    'country' => $req->country,
                    'locality' => $req->locality,
                    'landmark' => $req->landmark,
                    'phone_alt' => $req->phone_alt,
                    'address_type' => $req->address_type
                ]);    
                return redirect('My-address');
            }else{
                // $existing_addr = UserAddress::where('user_id',Auth::id())->count();
                $data= new UserAddress;
                $data->user_id = Auth::id();
                $data->name = $req->name;
                $data->phone  = $req->phone;
                $data->email  = $req->email;
                $data->selected = empty($existing_addr)?"1":"0";
                $data->address = $req->address;
                $data->city = $req->city;
                $data->state  = $req->state;
                $data->pin_code  = $req->pin_code;
                $data->country  = $req->country;
                $data->locality  = $req->locality;
                $data->landmark  = $req->landmark;
                $data->phone_alt  = $req->phone_alt;
                $data->address_type = $req->address_type;
                $data->save();
                return back();
            }
    
        }

        public function userAddressDelete($id){
            UserAddress::where('id',$id)->delete();
            toastr()->error('Your Address Delete Successfully');
            return back();
        }

       

}
