<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
     public function index()
    {
        return PostResource::collection(Post::with('category', 'user')->get());
    }

    public function store(Request $request)
    {

     $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:posts,slug',
        'content' => 'required',
        'status' => 'required|in:draft,published',
        'user_id' => 'required|exists:users,id',
        'category_id' => 'required|exists:categories,id',
    ]);

    $post = Post::create([
        'title' => $request->title,
        'slug' => $request->slug,
        'content' => $request->content,
        'status' => $request->status,
        'user_id' => $request->user_id,  // must include the logged-in user
        'category_id' => $request->category_id,
    ]);

    return new PostResource($post);
  }

    public function show(Post $post)
    {
        return new PostResource($post->load('category', 'user'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'slug' => 'sometimes|required|string|max:255|unique:posts,slug,' . $post->id,
            'content' => 'sometimes|required',
            'status' => 'sometimes|required|in:draft,published',
            'category_id' => 'sometimes|required|exists:categories,id',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);
        $post->update([
        'title' => $request->title ?? $post->title,
        'slug' => $request->slug ?? $post->slug,
        'content' => $request->content ?? $post->content,
        'status' => $request->status ?? $post->status,
        'category_id' => $request->category_id ?? $post->category_id,
    ]);

        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully']);
    }
}
