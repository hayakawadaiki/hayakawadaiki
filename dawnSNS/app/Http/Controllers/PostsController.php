<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
use App\Follow;

class PostsController extends Controller
{
    // つぶやきの一覧表示
    public function index(User $user, Follow $follow)
    {
      $posts = \App\Post::orderBy('created_at', 'desc')->paginate(8);
      return view('posts.index', ['posts' => $posts]);
    }

    // つぶやき投稿処理
    // public function post_create(request $request)
    // {
    //   $post = new Post;
    //   $post->user_id = Auth::id();
    //   $post->post = $request->post;
    //   $post->save();
    //   return redirect('top');
    // }

    // つぶやき投稿処理
    public function post_create(request $request)
    {
      $post = new Post;
      $post->create([
        'user_id' => Auth::id(),
        'post' => $request->post,
      ]);
      return redirect('top');
    }

    // つぶやき編集画面の表示
    public function post_update_form($id)
    {
      $post = Post::find($id);
      return view('posts.update_form', ['post' => $post]);
    }

    // つぶやきの編集
    public function post_update(request $request)
    {
      $post = Post::find($request->id);
      $post->post = $request->post;
      $post->save();
      return redirect('top')->with('flash_message', '投稿を編集しました。');
    }

    // つぶやきの削除
    public function post_delete(request $request)
    {
      $data = Post::find($request->id);
      $data->delete();
      return redirect('top');
    }
}
