@extends('layouts.login')

  @if (session('flash_message'))
    <div class="flash_message alert alert-danger">
      {{ session('flash_message') }}
    </div>
  @endif

@section('content')

<section>
  <!-- フラッシュメッセージ -->

  <div class="form-group">
    <form method="post" action="{{ route('post.create') }}">
      {!! csrf_field() !!}
      <textarea class="form-control" id="exampleFormControlTextarea1" type="text" name="post" rows="3"></textarea>
    	<input type="submit" value="投稿">
    </form>
  </div>

  <table>
    @foreach ($posts as $post)
    <tr>
      <td><a href=""><img class="icon" src="images/{{ $post->user->images }}"></a></td>
      <td>{{ $post->user->username }}</td>
      <td>{{ $post->post }}</td>
      <td>{{ $post->created_at }}</td>
      @if( Auth::id() === $post->user_id )
      <td><a class="btn" href="{{ route('post_update_form', [$post->id]) }}" ><img src="images/edit.png"></a></td>
      <td><a class="btn" href="{{ route('post.delete') }}?id={{ $post->id }}" onclick="return confirm('削除しますか？')"><img src="images/trash.png"></a></td>
      @endif
    </tr>
    @endforeach
  </table>

<!-- ページネーション -->
<div class="my-4 d-flex justify-content-center">
    {{ $posts->links() }}
</div>

</section>

@endsection
