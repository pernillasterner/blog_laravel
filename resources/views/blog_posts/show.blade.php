<x-layouts.app :title="__('Blog Posts')">
    <a href="{{ route('blog_posts.index') }}">BACK</a>

    <flux:heading size="xl">{{ $post->title }}</flux:heading>

    <flux:text>{{ $post->content }}</flux:text>

    <flux:text>Author: {{ $post->user->name }}</flux:text>
</x-layouts.app>
