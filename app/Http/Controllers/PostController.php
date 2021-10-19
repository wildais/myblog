<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post){
        //return $slug
        //dd($posts); //dummy n die or var_dump()
        
        //$posts = \DB::table('posts')->where('slug',$slug)->first();
        //$posts = Post::where('slug',$slug)->first();
        
        //jika slug tidak ada
        // if(is_null($posts)){
        //     abort(404);
        // }
        
        //return view('posts/show', compact('posts'));
        return view('posts/show', compact('post'));
    }
}