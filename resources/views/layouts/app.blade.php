<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

    <!-- Navigation Bar -->
  <nav class="bg-white shadow-md mb-0.5">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold">BlogApp</a>
            <div>
                <a href="{{ route('dashboard') }}" class="px-4 py-2 text-black hover:text-blue-600 ">Dashboard</a>
                <a href="{{ route('profile') }}" class="px-4 py-2 text-black hover:text-blue-600">Profile</a>
            </div>
        </div>
    </nav>
     <!-- 🔹 Sidebar + Main Content -->
    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64  min-h-screen text-black bg-white shadow-md">
            <div class="px-3 py-4 overflow-y-auto">
                <ul class="space-y-2 font-medium">
                    <!-- Posts Dropdown -->
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-left"
                                data-collapse-toggle="dropdown-posts">
                            <span class="flex-1 block py-2 hover:text-blue-600">Posts</span>
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <ul id="dropdown-posts" class="hidden pl-6 space-y-2">
                            <li><a href="{{ route('posts.index') }}" class="block py-2 hover:text-blue-600">All Posts</a></li>
                            <li><a href="{{ route('posts.create') }}" class="block py-2 hover:text-blue-600">Create Post</a></li>
                        </ul>
                    </li>

                    <!-- Categories Dropdown -->
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-left "data-collapse-toggle="dropdown-categories">
                            <span class="flex-1 block py-2 hover:text-blue-600">Categories</span>
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <ul id="dropdown-categories" class="hidden pl-6 space-y-2">
                            <li><a href="{{ route('categories.index') }}" class="block py-2 hover:text-blue-600">All Categories</a></li>
                            <li><a href="{{ route('categories.create') }}" class="block py-2 hover:text-blue-600">Create Category</a></li>
                        </ul>
                    </li>

                    <!-- Logout -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class=" flex block w-full text-left p-2 text-red-400  hover:text-blue-600"><span class="flex-1 block py-2 hover:text-blue-600">Logout</span></button>
                        </form>
                    </li>
                </ul>
            </div>
        </aside>
    <!-- Main Content -->

    <main class="max-w-7xl mx-auto px-4 py-4 flex-1 p-6">
        @yield('content')
    </main>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.1/flowbite.min.js"></script>



</body>
</html>
