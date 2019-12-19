@extends('frontEnd.master')


@section('pageTopSection')







@endsection


@section('pageBottomSection')

					@foreach($publishedArticles as $publishedArticle)
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('single/'.$publishedArticle->articleSlug)}}"><img src="{{asset('featuredImage')}}/{{$publishedArticle->image}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{url('category/'.$publishedArticle->categorySlug)}}">{{$publishedArticle->categoryName}}</a>
								{{-- <a href="#">Lifestyle</a> --}}
							</div>
							<h3 class="post-title"><a href="{{url('single/'.$publishedArticle->articleSlug)}}">{{$publishedArticle->articleHeading}}</a></h3>
							<ul class="post-meta">
								{{-- <li><a href="#">John Doe</a></li> --}}
								<li>{{$publishedArticle->created_at}}</li>
							</ul>
							{!! Str::words($publishedArticle->articleContent, 50)!!}
						</div>
					</div>
					<!-- /post -->
					@endforeach



@endsection