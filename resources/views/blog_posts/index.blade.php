<h1>BlogPosts</h1>
<ul>
    @foreach ($posts as $post)
       <li>
            <a href="">{{ $post->title }}</a>
        </li>
    @endforeach
</ul>

{{ $posts->links() }}
