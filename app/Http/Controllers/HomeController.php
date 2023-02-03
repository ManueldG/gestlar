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
<<<<<<< HEAD
        $posts = Post::all();

=======
<<<<<<< HEAD
        $posts = Post::orderBy('id', 'desc')
        ->get();;
=======
        $posts = Post::orderBy('id','desc')->get();

>>>>>>> 9068d5c7 (aggiunta textarea)
>>>>>>> 7c1d2728 (aggiunta textarea)
=======
        $posts = Post::orderBy('id', 'desc')
        ->get();;
=======
        $posts = Post::orderBy('id','desc')->get();

>>>>>>> 9068d5c7 (aggiunta textarea)
>>>>>>> 7c1d2728e6b72a53f56d24ad10e081a80e1bc5db

        return view('home',compact('posts'));
    }
}
