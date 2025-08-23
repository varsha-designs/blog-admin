@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

    <div class="bg-white p-6 rounded shadow">
        <p class="text-gray-700 mb-4"><strong>Status:</strong> {{ ucfirst($post->status) }}</p>
        <p class="text-gray-700 mb-4"><strong>Content:</strong></p>
        <p class="text-gray-800 whitespace-pre-line">{{ $post->content }}</p><br>

        <div class="mt-6">
            <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
            <a href="{{ route('posts.index') }}" class="ml-2 text-gray-600 hover:underline">Back to Posts</a>
        </div>
    </div>
</div>
@endsection
