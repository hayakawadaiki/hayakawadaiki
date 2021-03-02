@extends('layouts.login')

@section('content')

<section>
<form class="" action="{{ route('post.update') }}" method="post">
{!! csrf_field() !!}
  <textarea name="post" rows="8" cols="80">{{ $post->post }}</textarea>
  <input type="hidden" name="id" value="{{ $post->id }}">
 <button class="btn btn-default" type="button" onclick="history.back()">戻る</button>
 <button class="btn btn-default" type="submit">登録</button>
</form>
</section>

@endsection
