<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('frontend.add');
    }

    public function create(Request $request){

       $this->validate( $request,[
           'title'=>'required',
           'content'=>'required',
       ]);
        $post=new Post();
        $post->title= request('title');
        $post->content=request('content');
//        dd($post);
        request()->user()->posts()->save($post);
        return back()->with('success','Post Successfully Added');
    }

    public function show($id){
        $post= Post::find($id);
//        dd($post);

        return view('frontend.details')->with('post',$post);
    }

    public function edit($id){
        $updatepost=Post::find($id);
        $updatepost->title=request('title');
        $updatepost->content=request('content');
        $updatepost->save();
//        dd($updatepost);
        return back()->with('success','Update Successful');
    }
    public function destroy($id){
        $deletepost=Post::find($id);
        $deletepost->delete();
        return redirect('/dashboard')->with('success', 'Delete Successful');
    }
    
    public function editform($id){
        $post=Post::find($id);
        return view('frontend.updateform')->with('post',$post);
    }
}
