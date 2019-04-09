@extends ('layouts.master')
@section ('head.title')
Edit Article
@stop
@section ('body.content')
@if(Session::has('login') && Session::get('login') == true)
<div class="col-sm-6 offset-sm-3">
	<h3 class="text-center">Edit Article</h3>
	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong>Some problems<br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{ route('article.update', $article->id) }}" method="POST" class="form-horizontal">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="form-group">
			<label for="txtclass" class="control-label">Class</label>
			<select class="form-control" name="txtclass" id="txtclass" required="required">
				<option value="{{ $article->class }}" selected="selected" hidden="hidden">{{ $article->class }}</option>
				<option value="blog">blog</option>
				<option value="news">news</option>
				<option value="my">my</option>
				<option value="share">share</option>
				<option value="sport">sport</option>
				<option value="hot">hot</option>
				<option value="music">music</option>
			</select>
		</div>
		<div class="form-group">
			<label for="txttitle" class="control-label">Title</label>
			<input type="text" class="form-control" name="txttitle" id="txttitle" required="required" value="{{ $article->title }}" />
		</div>
		<div class="form-group">
			<label for="txtmeta" class="control-label">Meta</label>
			<input type="text" class="form-control" name="txtmeta" id="txtmeta" value="{{ $article->meta }}" />
		</div>
		<div class="form-group">
			<label for="txtimage" class="control-label">Image</label>
			<input type="text" class="form-control" name="txtimage" id="txtimage" value="{{ $article->image }}" />
		</div>
		<div class="form-group">
			<label for="txtcontent" class="control-label">Content</label>
			<textarea class="form-control" rows="5" name="txtcontent" id="txtcontent" required="required">{{ $article->content }}</textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-primary">Update</button>
		</div>
	</form>
</div>
@else
<p class="text-center">Please <a href="{{ url('/login') }}">Login</a></p>
@endif
@stop