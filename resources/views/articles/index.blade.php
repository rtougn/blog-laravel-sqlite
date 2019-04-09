@extends ('layouts.master')
@section ('head.title')
Articles
@stop
@section ('body.content')
@foreach ($articles as $article)
<div class="row article">
	<div class="col-sm-4 offset-sm-1">
		<a href="{{ route('article.'.$article->class) }}"><button class="position-absolute">{{ $article->class }}</button></a>
		<img class="image1" src="{{ $article->image }}" />
	</div>
	<div class="col-sm-6 offset-sm-1">
		<h3>{{ $article->title }}</h3>
		<p class="lead">{{ $article->meta }}</p>
		<p><a href="{{ route('article.show', $article->id) }}">Read more...</a></p>
	</div>
</div>
@endforeach
<div class="row">
	<div class="col-sm-4 offset-sm-4">
		{!! $articles->render() !!}
	</div>
</div>
@stop