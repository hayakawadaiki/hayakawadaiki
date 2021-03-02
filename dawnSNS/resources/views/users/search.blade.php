@extends('layouts.login')

@section('content')

<form  method="get" action="{{ route('search_result') }}">
{{ csrf_field() }}
	<div class="input-group">
		<input type="text" name="search_result" value="" class="form-control" style="height:32px;" placeholder="名前を検索">
		<span class="input-group-btn">
			<button id="search-button" type="submit" class="btn btn-primary">
				<i class="fas fa-search"></i>
			</button>
		</span>
	</div>
</form>

@if(isset($search_result))
	<p>検索ワード：{{ $search_result }}</p>
	<p>検索結果：{{ $users_count }}件</p>
@endif

<table>
	@foreach ($users as $user)
	<tr>
		<td><a href=""><img class="icon" src="images/{{ $user->images }}"></a></td>
		<td>{{ $user->username }}</td>
		<td>
		  @if (auth()->user()->isFollowing($user->id))
	    <form method="post" action="{{ route('unfollow', ['id' => $user->id]) }}">
	      {{ csrf_field() }}
	      {{ method_field('DELETE') }}
	      <button type="submit" class="btn btn-danger">フォロー解除</button>
	    </form>
			@elseif ( Auth::id() === $user->id )
			<form method="get" action="{{ route('profile') }}">
	      {{ csrf_field() }}
	      <button type="submit" class="btn btn-light">プロフィール</button>
	    </form>
		  @else
	    <form method="post" action="{{ route('follow', ['id' => $user->id]) }}">
	      {{ csrf_field() }}
	      <button type="submit" class="btn btn-primary">フォローする</button>
	    </form>
		  @endif
		</td>
		<td>
			@if (auth()->user()->isFollowed($user->id))
			<div class="px-2">
				 <span class="px-1 bg-secondary text-light">フォローされています</span>
			</div>
			@endif
		</td>
	@endforeach
</table>

<!-- ページネーション -->
<div class="my-4 d-flex justify-content-center">
    {{ $users->appends(request()->input())->links() }}
</div>

@endsection
