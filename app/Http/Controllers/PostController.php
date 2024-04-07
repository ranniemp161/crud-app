<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $incomingField = $request->validate([
            'title'=> 'required',
            'body'=> 'required',
        ]);
        $incomingField['title'] = strip_tags($incomingField['title']);
        $incomingField['body'] = strip_tags($incomingField['body']);
        $incomingField['user_id'] =auth()->id();
        Post::create($incomingField);
        return redirect('/');

    }
}
