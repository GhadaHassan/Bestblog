<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PostsController extends Controller
{
    public function index(){
        //dd(Post::all());
        $posts = Post::orderBy('id','desc')->paginate(5);
        $count = Post::count();
        return view('posts.index', compact('posts','count'));
    }

    public function show($id){
        $posts = Post::find($id);
        return view('posts.show',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        // dd($request);
        $request->validate(
            [
                'title' => 'required|max:200',
                'body' => 'required|max:500',
            ]
        );
        // dd('ok');
        $post = new Post();
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('status','Post was Created!');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request ,$id){
        $request->validate(
            [
                'title' => 'required|max:200',
                'body' => 'required|max:500'
            ]
        );
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/posts')->with('status','Post was Updated!');

    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('status','Post was Deleted!');
    }

}
