



					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>

						@foreach($publishedArticles as $publishedArticle)
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="{{url('single/'.$publishedArticle->articleSlug)}}"><img src="{{asset('featuredImage')}}/{{$publishedArticle->image}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{url('category/'.$publishedArticle->categorySlug)}}">{{$publishedArticle->categoryName}}</a>
								</div>
								<h3 class="post-title"><a href="{{url('single/'.$publishedArticle->articleSlug)}}">{{$publishedArticle->articleHeading}}</a></h3>
							</div>
						</div>
						<!-- /post -->
						@endforeach




					</div>
					<!-- /post widget -->