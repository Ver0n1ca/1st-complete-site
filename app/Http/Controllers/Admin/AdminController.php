<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\Contact;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function article(){
    	$posts = Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.admin_per_page'));

        return view('account.article', compact('posts'));
    }
    public function users(){
    	$users= User::where('created_at', '<=', Carbon::now())
                ->orderBy('created_at', 'desc')
                ->paginate(config('blog.admin_per_page'));

        return view('account.users',compact('users'));
    }
    public function messages(){
    	$messages= Contact::where('created_at', '<=', Carbon::now())
                ->orderBy('created_at', 'desc')
                ->paginate(config('blog.admin_per_page'));

        return view('account.message',compact('messages'));
    }
    public function create()
    {
        return view('account.create');
    }
    public function create2(Request $request)
    {
        $post=new post();
        $post->title=$request->input('title');
        $post->slug=$request->input('slug');
        $post->content=$request->input('content');
        $post->tag1=$request->input('tag1');
        $post->tag2=$request->input('tag2');
        $post->tag3=$request->input('tag3');
        $post->save();
        return view('account.created',compact('post'));
    }
    public function edit($id)
    {
        $post=Post::where('id',$id)
                ->first();
        return view('account.edit',compact('post'));
    }
    public function update($id,Request $request)
    {
        Post::where('id',$id)
              ->update(['slug' => $request->input('slug'),
                        'title' => $request->input('title'),
                        'content' => $request->input('content'),
                        'tag1' => $request->input('tag1'),
                        'tag2' => $request->input('tag2'),
                        'tag3' => $request->input('tag3'),]);
        $post=Post::where('id',$id)
                ->first();       
        return view('account.update',compact('post'));
    }
    public function delete($id)
    {
        Post::where('id',$id)
                ->delete();
        $posts = Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.admin_per_page'));
        return view('account.article', compact('posts'));
    }
    public function comment($value='')
    {
        return view('account.com-admin');
    }
}
