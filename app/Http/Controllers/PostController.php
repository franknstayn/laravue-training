<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    public function index(){
        
        $post = Post::with('user')
                ->orderBy('created_at', 'desc')    
                ->get();

        return $post;
       
    }

    public function store(Request $request){

        return Post::create($request->all());
    }

    public function update(Request $request, $id){

        $post = Post::findOrFail($id);

        $post->update($request->all());
        return $post;
    }

    public function delete($id){

        $post = Post::findOrFail($id);

        $post->delete();
        return Post::all();
    }
}
