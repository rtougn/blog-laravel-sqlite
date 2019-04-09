<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse navigator" id="navbarTogglerDemo01">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<a class="navbar-brand" href="{{ route('article.index') }}">HOME</a>
			<li class="nav-item active">
				<a class="nav-link" href="{{ route('article.blog') }}">Blog</a>
				<ul class="sub-nav">
					<li><a href="{{ route('article.my') }}" title="">My Blog</a></li>
					<li><a href="{{ route('article.share') }}" title="">Share Blog</a></li>
				</ul>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="{{ route('article.news') }}">News</a>
				<ul class="sub-nav">
					<li><a href="{{ route('article.sport') }}" title="">Sport</a></li>
					<li><a href="{{ route('article.hot') }}" title="">Hot</a></li>
					<li><a href="{{ route('article.music') }}" title="">Music</a></li>
				</ul>
			</li>
			@if(Session::has('login') && Session::get('login') == true)
			<li class="nav-item">
				<a class="nav-link" href="{{ route('article.create') }}">New Article</a>
			</li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login.logout') }}">Logout</a>
            </li>
            @else
			<li class="nav-item">
				<a class="nav-link" href="{{ url('/login') }}">Login</a>
			</li>
            @endif
		</ul>
	</div>
</nav>