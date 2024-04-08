<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
 

    <title>Edit Post</title>
</head>
<body >

    <div class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-md mt-11">
    <h1 class="text-2xl font-bold mb-4">Edit Post</h1>
    <div class="flex">
        <form action="/edit-post/{{$post->id}}" method="POST" class="w-full max-w-md">
            @csrf
            @method('PUT')
            <input class="w-full bg-gray-100 border rounded py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name='title' value="{{$post->title}}">
            <textarea class="w-full bg-gray-100 border rounded py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="body">{{$post->body}}</textarea>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" style="border-radius: 10px;">
                Save Changes
            </button>
        </form>
    </div>
</div>
</body>
</html>