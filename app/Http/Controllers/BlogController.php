<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

        return view('blog.index', compact('posts'));
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }
    public function topic1(){
        $posts = Post::whereRaw('published_at <=? and (tag1=? or tag2=? or tag3=?)',[Carbon::now(),'1','1','1'])
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

        return view('blog.topic1', compact('posts'));
    }
    public function topic2(){
        $posts = Post::whereRaw('published_at <=? and (tag1=? or tag2=? or tag3=?)',[Carbon::now(),'2','2','2'])
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

        return view('blog.topic2', compact('posts'));
    }
    public function topic3(){
        $posts = Post::whereRaw('published_at <=? and (tag1=? or tag2=? or tag3=?)',[Carbon::now(),'3','3','3'])
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

        return view('blog.topic3', compact('posts'));
    }
}
