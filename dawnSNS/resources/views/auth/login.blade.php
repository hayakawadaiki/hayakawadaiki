@extends('layouts.logout')

@section('content')

<div class="inner">
  <div class="box">
        <div class="box2">
          <h2>DAWNSNSへようこそ</h2>
          {!! Form::open() !!}
          @csrf
          <div class="category">
						<label class="ctgr" for="Username">MailAdress</label>
            <div class="text_form">
							<input class="input" name="mail" type="text">
            </div>
          </div>
          <div class="category">
						<label class="ctgr" for="Username">Password</label>
            <div class="text_form">
							<input class="input" name="password" type="password" value="" id="password">
            </div>
          </div>

            <div class="form_create_btn">
              <input class="center-block" type="submit" value="LOGIN">
            </div>
          {!! Form::close() !!}

          <div class="back">
            <p>
              <a href="{{ url('/register') }}">新規ユーザーの方はこちら</a>
            </p>
          </div>
        </div>
    </div>
</div>

@endsection
