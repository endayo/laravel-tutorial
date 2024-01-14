<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();

        return view('post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * 新規作成
     */
    public function create()
    {
        return view('post.create');
    }
}
