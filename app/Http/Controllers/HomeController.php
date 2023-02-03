<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        $posts = Post::orderBy('id', 'desc')
        ->get();;
=======
        $posts = Post::orderBy('id','desc')->get();

>>>>>>> 9068d5c7 (aggiunta textarea)

        return view('home',compact('posts'));
    }
}
