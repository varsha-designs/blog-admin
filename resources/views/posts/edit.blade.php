@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Edit Post</h1>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-semibold">Content</label>
            <textarea name="content" id="content" rows="5" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-semibold">Status</label>
            <select name="status" id="status" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>

                <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
            <select name="category_id" id="category_id" class="w-full border rounded px-3 py-2">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
         </div>



    <div class="flex justify-between">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection
