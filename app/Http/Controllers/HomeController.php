<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $posts = Post::all();
        return view('home', ['posts'=>$posts]);
    }

    public function aboutUs(){
        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function manual(){

        return view('user-manual');
    }
}
