<x-layouts.app :title="__('Blog Posts')">
    <flux:heading size="xl">{{ __('Blog Posts')}}</flux:heading>

    <ul>
        @foreach ($posts as $post)
           <li>
                <a href="{{ route('blog_posts.show', $post) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</x-layouts.app>
