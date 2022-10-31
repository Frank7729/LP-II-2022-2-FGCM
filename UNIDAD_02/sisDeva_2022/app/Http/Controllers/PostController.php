<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::latest('id')->paginate(8);
        return view('posts.index', compact('posts'));
    }

    public function category(Category $category){
        //dd('buscar post cat'.$category);
        $posts=Post::where('category_id', $category->id)->latest('id')->paginate(8);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        $similares=Post::where('category_id', $post->category_id)->where('id','!=', $post->id)->take(5)->get();
        return view('posts.show', compact('post','similares'));
    }
}
