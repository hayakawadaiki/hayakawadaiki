@extends('layouts.logout')

@section('content')


<div class="inner">
  <div class="box">
        <div class="box2">
          <h2>DAWNSNSへようこそ</h2>

        <p class="text-center">{{ session('username') }}さん、</p>

          <p class="text-center">
            ようこそ！DAWNSNSへ！<br>
            ユーザー登録が完了しました。<br>
            さっそく、ログインをしてみましょう。<br>
          </p>
					<div class="back">
							<p>
								<a href="{{ url('/login') }}">ログイン画面に戻る</a>
							</p>
					</div>

        </div>
    </div>
</div>

@endsection
