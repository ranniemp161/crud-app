<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body >
    @auth
    <div class="mb-10 items-center w-full">
    <p class="text-center text-blue-500 text-xs mb-4 font-semibold">
        Congrats, you're logged in
    </p>
    <form class="ml-6" action="/logout" method="POST">
        @csrf
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
            Log out
        </button>
    </div>

    <div class="mx-10 my-10 items-center">
    </form>
    <div class="border-3 border-black">
        <h2 class="text-xl font-bold mb-4">Create a New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input class="w-full bg-gray-100 border rounded py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" placeholder="Title post">
            <textarea class="w-full bg-gray-100 border rounded py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="body" placeholder="Body content..."></textarea>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save Post</button>
        </form>
    </div>
    <div class="border-3 border-black">
        <h2 class="text-xl font-bold mb-4 mt-6">All Posts</h2>
        @foreach($posts as $post)
        <div class="bg-gray-300 p-4 m-4">
            <h3 class="text-lg font-semibold">{{$post['title']}} by {{$post->user->name}}</h3>
            <p>{{$post['body']}}</p>
            <p><a class="text-blue-500 hover:underline" href="/edit-post/{{$post->id}}">Edit</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:underline" type="submit">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
</div>


    @else
    <div class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-md mt-11">
        <h2 class="text-2xl font-semibold mb-4">Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Name" class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:border-blue-500">
            <input name="email" type="text" placeholder="Email" class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:border-blue-500">
            <input name="password" type="password" placeholder="Password" class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-500">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue">
                Register
            </button>
        </form>
    </div>
    
    <div class="mt-8 max-w-md mx-auto p-4 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="Name" class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:border-blue-500">
            <input name="loginpassword" type="password" placeholder="Password" class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-500">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue">
                Log In
            </button>
        </form>
    </div>
    
    @endauth

   
</body>
</html>