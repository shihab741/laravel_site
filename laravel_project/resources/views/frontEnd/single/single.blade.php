@extends('frontEnd.master')


@section('headerBottom')

		<!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url('{{asset('featuredImage/'.$articleInfoBySlug->image)}}');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						{{-- <div class="post-category">
							<a href="category.html">Lifestyle</a>
						</div> --}}
						<h1>{{$articleInfoBySlug->articleHeading}}</h1>
						<ul class="post-meta">
							{{-- <li><a href="author.html">John Doe</a></li> --}}
							<li>{{$articleInfoBySlug->created_at}}</li>
							{{-- <li><i class="fa fa-comments"></i> 3</li>
							<li><i class="fa fa-eye"></i> 807</li> --}}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->

@endsection

@section('pageTopSection')



@endsection


@section('pageBottomSection')

					<!-- post share -->
					<div class="section-row">
						<div class="post-share">
							<a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
							<a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
							<a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
							<a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
						</div>
					</div>
					<!-- /post share -->

					<!-- post content -->
					<div class="section-row">
					{!!$articleInfoBySlug->articleContent!!}
					</div>
					<!-- /post content -->










				

@endsection