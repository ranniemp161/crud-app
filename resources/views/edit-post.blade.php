<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 

    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <div style="flex;">
    <form action="/edit-post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name='title' value="{{$post->title}}">
        <textarea name="body">{{$post->body}}</textarea>
        <button style=
        "background-color: blue; 
        color:white; 
        border-radius:10px;
        "
        >
        Save Changes</button>
    </form>
    </div>
</body>
</html>