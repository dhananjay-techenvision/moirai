<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Categories;
use App\Tabs;
use App\Plans;
use App\Blogs;
use App\Banner;
use App\Main_section;
use App\Sub_section;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;




use DB;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{



    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
        toastr()->success('User Data Uploded Successfully!');   
        return redirect()->back();
    }
    public function importExportView()
    {
        $data['flag'] = 26; 
        $data['page_title'] = 'Import User'; 
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function export() 
    {
        $student = User::where('user_type', 2)
                        ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
                        ->leftJoin('education__details as ed', 'ed.user_id', '=', 'users.id')
                        ->leftJoin('colleges', 'colleges.id', '=', 'ed.collage_id')
                        ->leftJoin('branches', 'branches.id', '=', 'ed.branch_id')
                        ->leftJoin('semisters', 'semisters.id', '=', 'user_details.semister')
                        ->select('users.*', 'user_details.*', 'ed.*','colleges.*','branches.*','semisters.*')
                        ->get();
                        // dd($student);
        return Excel::download(new UsersExport($student), 'users.xlsx');
    }

    public function admin_list(Request $request)
    {
       $data['admin'] =  User::where('user_type', 1)->get();
        $data['flag'] = 1; 
        $data['page_title'] = 'View Admin'; 
        return view('Admin/webviews/manage_admin_user',$data);
    } 

    public function user_list(Request $request)
    {
        $data['Users'] = User::where('user_type', 2)->get();
        // dd($data['student']);
        $data['flag'] = 2; 
        $data['page_title'] = 'View Users';    
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_category()
    {
        $data['flag'] = 3; 
        $data['page_title'] = 'All Categories';       
       $data['Categories'] =  Categories::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_category()
    {
        $data['flag'] = 4; 
        $data['page_title'] = 'Add Categories';
        $data['Categories'] = Categories::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function submit_category(Request $req)
    {
    //    dd($req);

        $this->validate($req,[
            'category_name'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Categories::where('id',$req->id)->update([
                'category_name' => $req->category_name,
                'status' => $req->status,
            ]);
            toastr()->success('Category Updated Successfully!');
            return redirect('view-category');

         }else{
 
                $data = new Categories;
                $data->category_name=$req->category_name;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Category Successfully Added!');
            }
            else
            {
                toastr()->error('Category Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-category');

        }
    }


    public function delete_category($id){ 
        $data['result']=Categories::where('id',$id)->delete();
        toastr()->error('Category Deleted !');
        return redirect('view-category');
    }

    public function edit_category($id){
        $data['flag'] = 5; 
        $data['page_title'] = 'Edit Category'; 
        $data['categories'] = Categories::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function update_category_status($id, $status){ 
        Categories::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('Category Status Updated!');
        return redirect('view-category');
    }
    

    public function view_tabs()
    {
        $data['flag'] = 6; 
        $data['page_title'] = 'All Tab';       
       $data['tabs'] =  Tabs::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_tabs()
    {
        $data['flag'] = 7; 
        $data['page_title'] = 'Add Tab';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function submit_tabs(Request $req)
    {
    //    dd($req);

        $this->validate($req,[
            'tab_name'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Tabs::where('id',$req->id)->update([
                'tab_name' => $req->tab_name,
                'status' => $req->status,
            ]);
            toastr()->success('Tab Updated Successfully!');
            return redirect('view-tabs');

         }else{
 
                $data = new Tabs;
                $data->tab_name=$req->tab_name;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Tab Successfully Added!');
            }
            else
            {
                toastr()->error('Tab Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-tabs');
        }
    }

    public function delete_tabs($id){ 
        $data['result']= Tabs::where('id',$id)->delete();
        toastr()->error('Tab Deleted !');
        return redirect('view-tabs');
    }

    public function edit_tabs($id){
        $data['flag'] = 8; 
        $data['page_title'] = 'Edit Tab'; 
        $data['tabs'] = Tabs::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function update_tab_status($id, $status){ 
        Tabs::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('Tab Status Updated!');
        return redirect('view-tabs');
    }

    public function view_plans()
    {
        $data['flag'] = 12; 
        $data['page_title'] = 'All Plan';       
       $data['plans'] =  Plans::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_plans()
    {
        $data['flag'] = 13; 
        $data['page_title'] = 'Add Plan';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_user',$data);
    }
    public function submit_plans(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'plan_name'=>'required',       
            'price'=>'required|numeric'             
         ]);


         if($req->plan_id) { 
            Plans::where('id',$req->plan_id)->update([
                'plan_name' => $req->plan_name,
                'price' => $req->price,
                'status' => $req->status,
            ]);
            toastr()->success('Plan Updated Successfully!');
            return redirect('view-plans');
         }else{
 
                $data = new Plans;
                $data->plan_name=$req->plan_name; 
                $data->price=$req->price;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Plan Successfully Added!');
            }
            else
            {
                toastr()->error('Plan Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-plans');
        }
    }

    public function delete_plans($id){ 
        $data['result']= Plans::where('id',$id)->delete();
        toastr()->error('plan Deleted !');
        return redirect('view-plans');
    }

    public function edit_plans($id){
        $data['flag'] = 14; 
        $data['page_title'] = 'Edit Plan'; 
        $data['plans'] = Plans::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function update_plan_status($id, $status){ 
        Plans::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('Plan Status Updated!');
        return redirect('view-plans');
    }

    public function view_blogs()
    {
        $data['flag'] = 9; 
        $data['page_title'] = 'All Blog';       
       $data['blogs'] =  Blogs::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_blogs()
    {
        $data['flag'] = 10; 
        $data['page_title'] = 'Add Blog';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function submit_blogs(Request $req){            
        if($req->blog_id) { 
            // dd($req);
            $req->validate([
                'blog_title'=> 'required',
                //'blog_image' => 'image|mimes:jpeg,jpg,png,gif,svg' 
            ]);    
            if($req->hasFile('new_blog_image')) {
                $file = $req->file('new_blog_image');
                $filename = 'blog_image'.time().'.'.$req->new_blog_image->extension();
                $destinationPath = public_path('/images/blog');
                $file->move($destinationPath, $filename);
                $image = 'images/blog/'.$filename;
                Blogs::where('id',$req->blog_id)->update([
                    'blog_title' => $req->blog_title,  
                    'blog_images' => $image,
                    'blog_date' => $req->blog_date,
                    'blog_content' => $req->blog_content,
                    'status' => $req->status,
                ]);
            }else{
                Blogs::where('id',$req->blog_id)->update([
                    'blog_title' => $req->blog_title,  
                    'blog_date' => $req->blog_date,
                    'blog_content' => $req->blog_content,
                    'status' => $req->status,
                ]);
            }
            toastr()->success('Blog Successfully Updated!');
            return redirect('view-blogs');
        }else{  
            // dd($req);
            $req->validate([
                'blog_title'=> 'required',   
                'blog_content'=> 'required'
            ]); 

            if($req->hasFile('blog_image')) {
                $file = $req->file('blog_image');
                $filename = 'blog_image'.time().'.'.$req->blog_image->extension();
                $destinationPath = public_path('/images/blog');
                $file->move($destinationPath, $filename);
                $image = 'images/blog/'.$filename;
                
                $data = new Blogs();
                $data->blog_title = $req->blog_title;  
                $data->blog_date = $req->blog_date;
                $data->blog_content = $req->blog_content;  
                $data->blog_images  = $image;
                $data->status = $req->status;
                $data->save(); 
            
        }else{
            $data = new Blogs();
            $data->blog_title = $req->blog_title;  
            $data->blog_date = $req->blog_date;
            $data->blog_content = $req->blog_content;  
            $data->status = $req->status;
            $data->save(); 
        } 
         toastr()->success('Blog Successfully Added!');
        return redirect('view-blogs');
        }
    } 

    public function edit_blogs($id){
        $data['flag'] = 11; 
        $data['page_title'] = 'Edit Blog'; 
        $data['blogs'] = Blogs::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function delete_blogs($id){ 
        $data['result']=Blogs::where('id',$id)->delete();
        toastr()->error('Blog Deleted !');
        return redirect('view-subject');
    }

    public function view_banner()
    {
        $data['flag'] = 15;
        $data['page_title'] = 'All Banner';       
       $data['banner'] =  Banner::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_banner()
    {
        $data['flag'] = 16; 
        $data['page_title'] = 'Add Banner';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function submit_banner(Request $req){     
        // dd($req);       
        if($req->banner_id) { 
            // dd($req);
            $req->validate([
                'banner_name'=> 'required',
                //'blog_image' => 'image|mimes:jpeg,jpg,png,gif,svg' 
            ]);    
            if($req->hasFile('new_banner_image')) {
                $file = $req->file('new_banner_image');
                $filename = 'banner_image'.time().'.'.$req->new_banner_image->extension();
                $destinationPath = public_path('/images/banner');
                $file->move($destinationPath, $filename);
                $image = 'images/banner/'.$filename;
                Banner::where('id',$req->banner_id)->update([
                    'banner_name' => $req->banner_name,  
                    'banner_image' => $image,
                    'banner_title' => $req->banner_title,
                    'description' => $req->description,
                    'status' => $req->status,
                ]);
            }else{
                Banner::where('id',$req->banner_id)->update([
                    'banner_name' => $req->banner_name,  
                    'banner_title' => $req->banner_title,
                    'description' => $req->description,
                    'status' => $req->status,
                ]);
            }
            toastr()->success('Banner Successfully Updated!');
            return redirect('view-banner');
        }else{  
            // dd($req);
            $req->validate([
                'banner_name'=> 'required',   
                'banner_image'=> 'required'
            ]); 

            if($req->hasFile('banner_image')) {
                $file = $req->file('banner_image');
                $filename = 'banner_image'.time().'.'.$req->banner_image->extension();
                $destinationPath = public_path('/images/banner');
                $file->move($destinationPath, $filename);
                $image = 'images/banner/'.$filename;
                
                $data = new Banner();
                $data->banner_name = $req->banner_name;  
                $data->banner_title = $req->banner_title;
                $data->description = $req->description;  
                $data->banner_image  = $image;
                $data->status = $req->status;
                $data->save(); 
        }
         toastr()->success('Banner Successfully Added!');
        return redirect('view-banner');
        }
    } 

    public function edit_banner($id){
        $data['flag'] = 17; 
        $data['page_title'] = 'Edit Banner'; 
        $data['banner'] = Banner::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function delete_banner($id){ 
        $result = Banner::where('id',$id)->first();
        
        $path = public_path()."/".$result->banner_image;
        // dd($path);
        unlink($path);
        $data['result']=Banner::where('id',$id)->delete();
        
        toastr()->error('Banner Deleted !');
        return redirect('view-banner');
    }
     

    public function view_subject()
    {
       
        $data['flag'] = 6; 
        $data['page_title'] = 'All Subject';  
        $data['subjects'] = Subject::get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function add_subject()
    {
        $data['flag'] = 2; 
        $data['page_title'] = 'Add Subject';
        $data['courses'] = DB::table('courses')->where('status',"1")->get();
        $data['semister'] = Semister::where('status',"1")->get();
        //dd($data['standerds']);  
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_subject(Request $req)
    {
    //    dd($req);

        $this->validate($req,[
            'sub_name'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Subject::where('id',$req->id)->update([
                'subject_name' => $req->sub_name,
                'status' => $req->status,
            ]);
            toastr()->success('Subject Updated Successfully!');
            return redirect('view-subject');

         }else{
 
                $data = new Subject;
                $data->subject_name=$req->sub_name;            
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

    public function delete_subject($id){ 
        $data['result']=Subject::where('id',$id)->delete();
        toastr()->error('Subject Deleted !');
        return redirect('view-subject');
    }

    public function edit_subject($id){
        $data['flag'] = 15; 
        $data['page_title'] = 'Edit Subject'; 
        $data['subject'] = Subject::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    


}
