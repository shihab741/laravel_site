@extends('frontEnd.master')


@section('headerBottom')

		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url('{{asset('frontEndAssets')}}/./img/header-2.jpg');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{$categoryInfoBySlug->categoryName}}</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->

@endsection

@section('pageTopSection')



@endsection


@section('pageBottomSection')





					@foreach($articles as $article)
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('single/'.$article->articleSlug)}}"><img src="{{asset('featuredImage')}}/{{$article->image}}" alt=""></a>
						<div class="post-body">
							{{-- <div class="post-category">
								<a href="category.html">Travel</a>
								<a href="category.html">Lifestyle</a>
							</div> --}}
							<h3 class="post-title"><a href="{{url('single/'.$article->articleSlug)}}">{{$article->articleHeading}}</a></h3>
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