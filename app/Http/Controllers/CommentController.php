<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //

    public function index(){
        
        $post = Comment::with(['user'])
            ->orderBy('created_at', 'desc')    
            ->get();

        return $post;
    }

    public function store(Request $request){

        return Comment::create($request->all());
    }

    
    public function update(Request $request, $id){

        $post = Comment::findOrFail($id);

        $post->update($request->all());
        return $post;
    }

    public function delete($id){

        $post = Comment::findOrFail($id);

        $post->delete();
        return  Comment::with('user')->get();
    }
    

    
}
