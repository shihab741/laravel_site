@extends('frontEnd.master')


@section('headerBottom')

		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url('{{asset('frontEndAssets')}}/./img/header-2.jpg');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">Lifestyle</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->

@endsection

@section('pageTopSection')



@endsection


@section('pageBottomSection')

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{asset('frontEndAssets')}}/./img/hot-post-3.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<div class="row">
						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html"><img src="{{asset('frontEndAssets')}}/./img/post-3.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html"><img src="{{asset('frontEndAssets')}}/./img/post-5.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html"><img src="{{asset('frontEndAssets')}}/./img/post-9.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html"><img src="{{asset('frontEndAssets')}}/./img/post-7.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Health</a>
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>

					@foreach($articles as $article)
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('article/'.$article->articleSlug)}}"><img src="{{asset('featuredImage')}}/{{$article->image}}" alt=""></a>
						<div class="post-body">
							{{-- <div class="post-category">
								<a href="category.html">Travel</a>
								<a href="category.html">Lifestyle</a>
							</div> --}}
							<h3 class="post-title"><a href="{{url('article/'.$article->articleSlug)}}">{{$article->articleHeading}}</a></h3>
							<ul class="post-meta">
								{{-- <li><a href="author.html">John Doe</a></li> --}}
								<li>{{$article->created_at}}</li>
							</ul>
							{!! Str::words($article->articleContent, 50)!!}
						</div>
					</div>
					<!-- /post -->
					@endforeach
					

@endsection