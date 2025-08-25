@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $category->title }}</h1>

    <div class="bg-white p-6 rounded shadow">
        <p class="text-gray-700 mb-4"><strong>Content:</strong></p>
        <p class="text-gray-800 whitespace-pre-line">{{ $category->content }}</p><br>

        <div class="mt-6">
            <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
            <a href="{{ route('categories.index') }}" class="ml-2 text-gray-600 hover:underline">Back to Category</a>
        </div>
    </div>
</div>
@endsection
