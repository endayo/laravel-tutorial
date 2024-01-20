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

    /**
     * 新規登録
     * 
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:150',
            'content' => 'required'
        ]);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('post.index');
    }

    /**
     * 編集
     * 
     * @param string $id
     * @return View
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', [
            'post' => $post
        ]);
    }

    /**
     * 更新処理
     * 
     * @param Request $request
     * @param string $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $request->validate([
            'title' => 'required|max:150',
            'content' => 'required'
        ]);

        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('post.index');
    }

    /**
     * 削除処理
     * 
     * @param Request $request
     * @param string $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('post.index');
    }
}
