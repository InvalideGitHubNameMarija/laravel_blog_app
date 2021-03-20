<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsApiController extends Controller
{
    public function index(){
        return Post::all();
    }
    public function users(){
        return User::all();
    }

    public function store(){
        request()->validate([
            'title'=>'required',
            'body'=>'required',
            'rate'=>'required'
         ] );
    
        return Post::create([
          'title'=>  request('title'),
          'body'=>request('body'),
          'rate'=>request('rate'),
    
        ]);
    }
 public function update(Post $post){
    request()->validate([
        'title'=>'required',
        'body'=>'required',
        'rate'=>'required',
     ] );

    $post->update([

        'title'=>  request('title'),
        'body'=>request('body'),
        'rate'=>request('rate'),

    ]);
 }

 public function destroy(Post $post){
    $success= $post->delete();
    return[
        'success' =>  $success,
    ];
 }

 public function show($id){
    $post=Post::find($id);
    return $post;
 }
    
}
