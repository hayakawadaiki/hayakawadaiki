<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
use App\Follow;

class FollowsController extends Controller
{
  public function followList(Post $post, Follow $follow)
  {
    $user = auth()->user();
    $follow_users = $follow->followingIds($user->id);
    dd($follow_users->user);
    return view('follows.followList',['follow_users' => $follow_users]);
  }

  public function followerList()
  {
    return view('follows.followerList');
  }

  // フォロー
  public function follow(User $user, Follow $follow ,$id)
  {
    $user = User::find($id);
    $follower = auth()->user();
    $is_following = $follower->isFollowing($user->id);
    if(!$is_following) {
    $follower->follow($user->id);
    return back();
    }
  }

  // フォロー解除
  public function unfollow(User $user, Follow $follow ,$id)
  {
    $user = User::find($id);
    $follower = auth()->user();
    $is_following = $follower->isFollowing($user->id);
    if($is_following) {
    $follower->unfollow($user->id);
    return back();
    }
  }

}
