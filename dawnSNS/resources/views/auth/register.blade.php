@extends('layouts.logout')
@section('content')

<div class="inner">
  <div class="box">
        <div class="box2">
          <h2>新規ユーザー登録</h2>
        {!! Form::open() !!}
          <div class="category">
              <label class="ctgr" for="Username">Username</label>
              <div class="text_form">
                  <input id="username" type="text" name="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus maxlength="12" minlength="4">
              </div>
          </div>

          <div class="category">
              <label class="ctgr" for="mail">mail</label>
              <div class="text_form">
                <input id="mail" type="mail" name="mail" class="form-control @error('mail') is-invalid @enderror" name="mail" value="{{ old('mail') }}" required autocomplete="mail" maxlength="24" minlength="4">
              </div>
          </div>

          <div class="category">
              <label class="ctgr" for="password">password</label>
              <div class="text_form">
                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value=""  maxlength="12" minlength="8" style=”ime-mode:disabled;” required>
              </div>
          </div>

          <div class="category">
              <label class="ctgr" for="password-confirm">password-confirm</label>
              <div class="text_form">
                <input id="password-confirm" type="password" name="password" class="form-control" name="password_confirmation" required autocomplete="new-password" maxlength="12" minlength="8" style=”ime-mode:disabled;”>
              </div>
          </div>

          <div class="form_create_btn">
            <input class="center-block" type="submit" value="RESISTER">
          </div>
        </form>

          <div class="back">
              <p>
                <a href="{{ url('/login') }}">ログイン画面に戻る</a>
              </p>
          </div>
        </div>
    </div>
</div>
@endsection
