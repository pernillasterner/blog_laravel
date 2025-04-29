<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get 10 posts for each page and pass them to view blog index
        $posts = BlogPost::paginate(10);
        return view('blog_posts.index', ['posts' => $posts]);
    }
}
