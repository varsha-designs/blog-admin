<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">All Posts</h1>

    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Create Post</a>

    <table class="min-w-full mt-6 bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="py-2 px-4">Title</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr class="border-t">
                    <td class="py-2 px-4">{{ $post->title }}</td>
                    <td class="py-2 px-4">{{ ucfirst($post->status) }}</td>
                    <td class="py-2 px-4 space-x-2">
                        <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('posts.edit', $post) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this post?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td class="py-2 px-4" colspan="3">No posts found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
