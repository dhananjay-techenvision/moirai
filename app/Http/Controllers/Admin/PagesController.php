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
use App\WhatisSection;
use App\Footer_Banner;
use App\Footer_Slider;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class PagesController extends Controller
{
    public function view_main_section()
    {
        $data['flag'] = 1; 
        $data['page_title'] = 'All Main Section';       
       $data['main_section'] =  Main_section::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function add_main_section()
    {
        $data['flag'] = 2; 
        $data['page_title'] = 'Add Main Section';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function submit_main_section(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'main_section'=>'required'             
         ]);

         if($req->main_section_id) { 

            Main_section::where('id',$req->main_section_id)->update([
                'main_section' => $req->main_section,
                'status' => $req->status,
            ]);
            toastr()->success('Main Section Updated Successfully!');
            return redirect('view-main-section');

         }else{
 
                $data = new Main_section;
                $data->main_section=$req->main_section;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Main Section Successfully Added!');
            }
            else
            {
                toastr()->error('Main Section Not Added!!');
            }         
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-main-section');
        }
    }

    public function delete_main_section($id){ 
        $data['result']= Main_section::where('id',$id)->delete();
        toastr()->error('Main Section Deleted !');
        return redirect('view-main-section');
    }

    public function edit_main_section($id){
        $data['flag'] = 3; 
        $data['page_title'] = 'Edit Main Section'; 
        $data['main_section'] = Main_section::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function view_sub_section()
    {
        $data['flag'] = 4; 
        $data['page_title'] = 'All Sub Section';       
       $data['sub_section'] =  Sub_section::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function add_sub_section()
    {
        $data['flag'] = 5; 
        $data['page_title'] = 'Add Sub Section';
        $data['main_section'] =  Main_section::get();
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function submit_sub_section(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'main_section_id'=>'required',
            'title'=>'required'
         ]);

         if($req->sub_section_id) { 
            //  dd($req);
            Sub_section::where('id',$req->sub_section_id)->update([
                'main_section_id' => $req->main_section_id,
                'title' => $req->title,
                'description' => $req->description,
                'status' => $req->status,
            ]);
            toastr()->success('Sub Section Updated Successfully!');
            return redirect('view-sub-section');

         }else{
 
                $data = new Sub_section;
                $data->main_section_id=$req->main_section_id;
                $data->title=$req->title; 
                $data->description=$req->description;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Sub Section Successfully Added!');
            }
            else
            {
                toastr()->error('Sub Section Not Added!!');
            }         
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-sub-section');
        }
    }

    public function delete_sub_section($id){ 
        $data['result']= Sub_section::where('id',$id)->delete();
        toastr()->error('Sub Section Deleted !');
        return redirect('view-sub-section');
    }

    public function edit_sub_section($id){
        $data['flag'] = 6; 
        $data['page_title'] = 'Edit Sub Section'; 
        $data['sub_section'] = Sub_section::where('id',$id)->first(); 
        $data['main_section'] =  Main_section::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function view_home_what_is_section()
    {
        $data['flag'] = 7; 
        $data['page_title'] = 'Whats is Company Section';       
       $data['what_is_section'] =  WhatisSection::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function add_home_what_is_section()
    {
        $data['flag'] = 8; 
        $data['page_title'] = 'Whats is Company Section';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function submit_home_what_is_section(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'title'=>'required',
         ]);

         if($req->what_is_section_id) { 

            WhatisSection::where('id',$req->what_is_section_id)->update([
                'title' => $req->title,
                'status' => $req->status,
            ]);

            if($req->hasFile('new_image')) {
                $file = $req->file('new_image');
                $filename = 'image'.time().'.'.$req->new_image->extension();
                $destinationPath = public_path('/images');
                $file->move($destinationPath, $filename);
                $image = 'images/'.$filename;
                WhatisSection::where('id',$req->what_is_section_id)->update([  
                    'image' => $image,
                ]);
            }

            toastr()->success('Content Updated Successfully!');
            return redirect('view-home-what-is-section');

         }else{
                $data = new WhatisSection;
                $data->title=$req->title; 
                // $data->image=$req->image;            
                $data->status=$req->status;             
                $result = $data->save();
                $insertedId = $data->id;

                if($req->hasFile('image')) {
                    $file = $req->file('image');
                    $filename = 'image'.time().'.'.$req->image->extension();
                    $destinationPath = public_path('/images');
                    $file->move($destinationPath, $filename);
                    $image = 'images/'.$filename;
                    WhatisSection::where('id',$insertedId)->update([  
                        'image' => $image,
                    ]);
                }
            if($result)
            {
                toastr()->success('Content Successfully Added!');
            }
            else
            {
                toastr()->error('Content Not Added!!');
            }         
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-home-what-is-section');
        }
    }

    public function delete_home_what_is_section($id){ 
        $data['result']= WhatisSection::where('id',$id)->delete();
        toastr()->error('Content Deleted !');
        return redirect('view-home-what-is-section');
    }

    public function edit_home_what_is_section($id){
        $data['flag'] = 9; 
        $data['page_title'] = 'Edit Company Section'; 
        $data['whats_is_section'] = WhatisSection::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function view_footer_banner()
    {
        $data['flag'] = 10;
        $data['page_title'] = 'Footer Banner';       
       $data['footer_banner'] =  Footer_Banner::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function add_footer_banner()
    {
        $data['flag'] = 11; 
        $data['page_title'] = 'Add Footer Banner';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function submit_footer_banner(Request $req){     
        // dd($req);       
        if($req->footer_banner_id) { 
            // dd($req);
            $req->validate([
                'footer_banner_title'=> 'required',
                //'blog_image' => 'image|mimes:jpeg,jpg,png,gif,svg' 
            ]);    
            if($req->hasFile('new_footer_banner_image')) {
                $file = $req->file('new_footer_banner_image');
                $filename = 'footer_banner_image'.time().'.'.$req->new_footer_banner_image->extension();
                $destinationPath = public_path('/images/banner');
                $file->move($destinationPath, $filename);
                $image = 'images/banner/'.$filename;
                Footer_Banner::where('id',$req->footer_banner_id)->update([
                    'footer_banner_title' => $req->footer_banner_title,  
                    'footer_banner_image' => $image,
                    'description' => $req->description,
                    'status' => $req->status,
                ]);
            }else{
                Footer_Banner::where('id',$req->footer_banner_id)->update([
                    'footer_banner_title' => $req->footer_banner_title,  
                    'description' => $req->description,
                    'status' => $req->status,
                ]);
            }
            toastr()->success('Banner Successfully Updated!');
            return redirect('view-footer-banner');
        }else{  
            // dd($req);
            $req->validate([
                'footer_banner_title'=> 'required',   
                'footer_banner_image'=> 'required'
            ]); 

            if($req->hasFile('footer_banner_image')) {
                $file = $req->file('footer_banner_image');
                $filename = 'footer_banner_image'.time().'.'.$req->footer_banner_image->extension();
                $destinationPath = public_path('/images/banner');
                $file->move($destinationPath, $filename);
                $image = 'images/banner/'.$filename;
                
                $data = new Footer_Banner();
                $data->footer_banner_title = $req->footer_banner_title;  
                $data->description = $req->description;  
                $data->footer_banner_image  = $image;
                $data->status = $req->status;
                $data->save(); 
        }
         toastr()->success('Banner Successfully Added!');
        return redirect('view-footer-banner');
        }
    } 

    public function edit_footer_banner($id){
        $data['flag'] = 12; 
        $data['page_title'] = 'Edit Footer Banner'; 
        $data['footer_banner'] = Footer_Banner::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function delete_footer_banner($id){ 
        $result = Footer_Banner::where('id',$id)->first();
        $path = public_path()."/".$result->footer_banner_image;
        // dd($path);
        unlink($path);
        $data['result']=Footer_Banner::where('id',$id)->delete();
        
        toastr()->error('Banner Deleted !');
        return redirect('view-footer-banner');
    }

    public function view_footer_slider()
    {
        $data['flag'] = 13; 
        $data['page_title'] = 'View Footer Slider';       
       $data['footer_slider'] =  Footer_Slider::get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function add_footer_slider()
    {
        $data['flag'] = 14; 
        $data['page_title'] = 'Add Footer Slider';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function submit_footer_slider(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'title'=>'required',
         ]);

         if($req->footer_slider_id) { 

            Footer_Slider::where('id',$req->footer_slider_id)->update([
                'title' => $req->title,
                'status' => $req->status,
            ]);

            if($req->hasFile('new_image')) {
                $file = $req->file('new_image');
                $filename = 'footer_slider_image'.time().'.'.$req->new_image->extension();
                $destinationPath = public_path('images/banner/');
                $file->move($destinationPath, $filename);
                $image = 'images/banner/'.$filename;
                Footer_Slider::where('id',$req->footer_slider_id)->update([  
                    'image' => $image,
                ]);
            }

            toastr()->success('Footer Slider Updated!');
            return redirect('view-footer-slider');

         }else{
                $data = new Footer_Slider;
                $data->title=$req->title;           
                $data->status=$req->status;             
                $result = $data->save();
                $insertedId = $data->id;

                if($req->hasFile('image')) {
                    $file = $req->file('image');
                    $filename = 'footer_slider_image'.time().'.'.$req->image->extension();
                    $destinationPath = public_path('images/banner/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/banner/'.$filename;
                    Footer_Slider::where('id',$insertedId)->update([  
                        'image' => $image,
                    ]);
                }
            if($result)
            {
                toastr()->success('Footer slider Successfully Added!');
            }
            else
            {
                toastr()->error('Footer slider Not Added!!');
            }         
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-footer-slider');
        }
    }

    public function delete_footer_slider($id){ 
        $result = Footer_Slider::where('id',$id)->first();
        $path = public_path()."/".$result->image;
        // dd($path);
        unlink($path);
        $data['result']=Footer_Slider::where('id',$id)->delete();        
        toastr()->error('slider image Deleted !');
        return redirect('view-footer-slider');
    }

    public function edit_footer_slider($id){
        $data['flag'] = 15; 
        $data['page_title'] = 'Edit Footer Slider'; 
        $data['footer_slider'] = Footer_Slider::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }
}
