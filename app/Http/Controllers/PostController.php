<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post,Request $request)
    {
        if($request->input('search_name')) {
            $posts=$post->where('user_id', Auth::id())->where('subject', $request->input('search_name'))->get();
         } else {
            $posts=$post->where('user_id', Auth::id())->get();
         }
        
       
        // $study_time=[];
        // foreach($post->getPaginateByLimit(10) as $postEl) {
            
        // }
        // $study_time=$post
        //return view('posts.index')->with(['posts' => $post->getPaginateByLimit(10)]);
        return view('posts.index')->with(['posts' => $posts]);
    }
    
    public function refine(Request $request)
    {
        dd($request);
    }
    
     public function show(Post $post)
    {
       return view('posts.show')->with(['post' => $post]);
    } 
    
    public function create(Category $category, )
    {
        return view('posts.create')->with(['categories' => $category->get()]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $input["user_id"]=auth()->user()->id;
        $input["category_id"]=1;
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $input["user_id"]=auth()->user()->id;
        $input["category_id"]=1;
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
}