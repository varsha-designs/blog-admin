@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Edit Category</h1>
     @include('components.alert')

    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $category->title) }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-semibold">Content</label>
            <textarea name="content" id="content" rows="5" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">{{ old('content', $category->content) }}</textarea>
        </div>

    <div class="flex justify-between">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            <a href="{{ route('categories.index') }}" class="text-gray-600 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection
