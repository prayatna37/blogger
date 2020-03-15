<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.dashboard');
    }

    public function show(){
        $show=Post::all();
        /*$show=Post::orderBy('id','desc');*/
        return view('frontend.show')->with('posts', $show);
    }

    public function post($id){
        $post= Post::find($id);

//        dd($post);

        return view('frontend.otherposts.other')->with('post',$post);
    }

    public function search(){
        $search=request('search');
        $post=DB::table('posts')->where('name', 'like', '%'.$search.'%');
        return view('frontend.result')->with('posts',$post);
    }
}
