<?php

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/posts',function(){
        return new PostResource(Post::all());
    }
);

Route::get('/posts/{id}',function($id){
    $post = Post::find($id);
    $post->tag;
    $post->categories;
    return new PostResource($post);
}
);





