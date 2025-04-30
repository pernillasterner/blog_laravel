<div>
    <a href="{{ route('blog_posts.index') }}">BACK</a>

    <h2>{{ $post->title }}</h2>

    <p>{{ $post->content }}</p>

    <p>{{ $post->user->name }}</p>
</div>
