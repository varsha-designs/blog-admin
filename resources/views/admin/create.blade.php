@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Create Post</h1>
    @include('components.alert')

    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Title</label>
            <input type="text" name="title" class="w-full border px-4 py-2 rounded" value="{{ old('title') }}">
        </div>

        <div>
            <label class="block mb-1 font-medium">Content</label>
            <textarea name="content" rows="5" class="w-full border px-4 py-2 rounded">{{ old('content') }}</textarea>
        </div>

        <div>
            <label class="block mb-1 font-medium">Status</label>
            <select name="status" class="w-full border px-4 py-2 rounded">
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>
         <div class="mb-4">
                <label for="categories_id" class="block mb-1 font-medium">Category</label>
                <select name="categories_id" id="categories_id" class="w-full border rounded px-3 py-2">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('categories_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
          </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Post</button>
            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:underline ml-2">Cancel</a>
        </div>
    </form>
</div>
@endsection
