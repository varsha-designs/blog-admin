@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Create Category</h1>
    @include('components.alert')

    <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
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
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Category</button>
            <a href="{{ route('categories.index') }}" class="text-gray-600 hover:underline ml-2">Cancel</a>
        </div>
    </form>
</div>
@endsection
