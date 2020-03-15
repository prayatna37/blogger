<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index($id){
        $post=User::find($id)->posts;
        return view('frontend.profile')->with('posts',$post);
    }
}
