<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');

//ログイン中のページ
Route::group(['middleware' => 'auth'], function() {
	// 投稿一覧ページを表示
	Route::get('/top','PostsController@index');
	// つぶやきの投稿
	Route::post('/post/create','PostsController@post_create')->name('post.create');
	// つぶやき編集画面の表示
	Route::get('post_update_form{id}','PostsController@post_update_form')->name('post_update_form');
	// つぶやきの編集
	Route::post('/post/update','PostsController@post_update')->name('post.update');
	// つぶやきの削除
	Route::get('/post/delete','PostsController@post_delete')->name('post.delete');
	// プロフィール画面の表示
	Route::get('/profile','UsersController@profile')->name('profile');
	// ユーザー検索画面の表示
	Route::get('/search','UsersController@search')->name('search');
	// ユーザー検索
	Route::get('/search','UsersController@search_result')->name('search_result');
	// フォローする
	Route::post('/search/{id}/follow', 'FollowsController@follow')->name('follow');
	// フォロー解除
	Route::delete('/search/{id}/unfollow', 'FollowsController@unfollow')->name('unfollow');
	// フォローリストの表示
	Route::get('/follow-list','FollowsController@followList')->name('followList');
	// フォロワーリストの表示
	Route::get('/follower-list','FollowsController@followerList')->name('followerList');
	// ログアウト
	Route::get('/logout','UsersController@getLogout');

});
