<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('posts.index', compact('posts'));
    }
       public function create()
        {
            $categories = Category::all(); // fetch all categories
            return view('posts.create', compact('categories'));
        }

    public function store(StorePostRequest $request)
    {
        $category = Category::find($request->categories_id);

        $post= Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'status' => $request->status,
            'user_id' => Auth::id(),
            'categories_id' => $request->categories_id,
            'category' => $category->title,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
         $categories = Category::all();
        return view('posts.show', compact('post', 'categories'));
    }


        public function edit(Post $post)
        {
            $categories = Category::all();   // Get all categories
            return view('posts.edit', compact('post', 'categories'));  // Pass categories too
        }

    public function update(StorePostRequest $request, Post $post)
    {
        $category = Category::find($request->categories_id);

        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'status' => $request->status,
            'categories_id' => $request->categories_id,
            'category' => $category->title,

        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
