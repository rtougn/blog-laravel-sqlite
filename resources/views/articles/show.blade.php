@extends ('layouts.master')
@section ('head.title')
Article
@stop
@section ('body.content')
<div class="row">
	<div class="col-sm-4 offset-sm-1">
		<a href="{{ url('/') }}" class="btn btn-link">Back to home</a>
	</div>
</div>
<div class="row">
	<div class="col-sm-8 offset-sm-2">
		<h3>{{ $article->title }}</h3>
		<strong><p>{{ $article->meta }}</p></strong>
		<div>
		<?php echo $article->content; ?>
		</div>
		<p>Creat at: {{ $article->created_at }}</p>
		<p>Update at: {{ $article->updated_at }}</p>
	</div>
</div>
@if(Session::has('login') && Session::get('login') == true)
<div class="row">
	<div class="col-sm-8 offset-sm-2">
		<a href="{{ route('article.edit', $article->id) }}" class="btn btn-info">Edit</a>
		<form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display: inline;">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<button class="btn btn-danger">Delete</button>
		</form>
	</div>
</div>
@endif
@stop