<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('user')->paginate(10);
        return view('blog_posts.index', ['posts' => $posts]);
    }

    public function show(BlogPost $blog_post)
    {
        return view('blog_posts.show', [
            'post' => $blog_post
        ]);
    }
}
