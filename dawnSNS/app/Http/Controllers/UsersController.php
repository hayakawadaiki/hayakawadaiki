<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
use App\Follow;

class UsersController extends Controller
{
    // プロフィール画面の表示
    public function profile(Request $request)
    {
      return view('users.profile');
    }

    // 検索ページの表示
    public function search()
    {
      $users = \App\User::orderBy('created_at', 'desc')->paginate(10);
      return view('users.search', ['users' => $users]);
    }

    // 検索処理
    public function search_result(Request $request)
    {
      $search_result = $request->search_result;
      $users = User::where('username', 'like', "%{$search_result}%")->paginate(10); // mailなども追加する場合はorWhere
      $users_count = $users->total();
      return view ('users.search', [
        'search_result' => $search_result,
        'users' => $users,
        'users_count' => $users_count,
      ]);
    }

    public function getLogout()
    {
      Auth::logout();
      return redirect('login');
    }
}
