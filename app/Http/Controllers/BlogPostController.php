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

    public function store()
    {
        $blog_post = BlogPost::create(
        [
            'title' => request('title'),
            'content' => request('content'),
            'published_at' => request('published_at'),
            'user_id' => auth()->id(),
        ]
    );
        return redirect()->route('blog_posts.index', $blog_post);
    }

    public function update(BlogPost $blog_post)
    {
        return redirect()->route('blog_posts.show', $blog_post);
    }
}
