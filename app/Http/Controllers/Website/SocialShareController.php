<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
class SocialShareController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        Share::page('http://jorenvanhocht.be', 'Share title')
        ->facebook()
        ->twitter()
        ->linkedin('Extra linkedin summary can be passed here')
        ->whatsapp();
  
        // $posts = Post::get();
  
        return view('socialshare', compact('shareButtons', 'posts'));
    }
}