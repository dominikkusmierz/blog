<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    


    public function index(){

        $posts=Post::latest()->where('active','1')->get();

        return view('posts.index',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $this->validate(request(),[
            'title'=>'required|min:3',
            'body'=>'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        session()->flash('message','Twój post został opublikowany');
        return redirect('/');
    }

    public function show(Post $post){
       

        return view('posts.show',compact('post'));
    }

    public function delete($id)
    {
            $post=Post::find($id);
            if($post->user->name==\Auth::user()->name){
            $post->active='0';
            $post->save();
            session()->flash('message','Twój post został usunięty');
            return redirect('/');
            }
            else return back()->withErrors(['message'=>'Wystąpił błąd podczas usuwania posta.']);
           
    }
}
