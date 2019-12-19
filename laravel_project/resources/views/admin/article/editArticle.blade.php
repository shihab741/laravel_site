@extends('admin/master')

@section('content')
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Edit article</div>
					        </div>
			  				<div class="panel-body">
			  					<form action="{{ url('dashboard/article/update') }}" method="POST" enctype="multipart/form-data">
			  					{{ csrf_field() }}
									<fieldset>

									<input class="form-control"  name="id" value="{{$articleInfoById->id}}" type="hidden">

										<div class="form-group">
											<label>Article heading</label>
											<input class="form-control"  name="articleHeading" value="{{$articleInfoById->articleHeading}}" type="text">
											<span class="text-danger">{{$errors->has('articleHeading') ? $errors->first('articleHeading') : ''}}</span>
										</div>

										<div class="form-group">
											<label>Article slug</label>
											<input class="form-control"  name="articleSlug" value="{{$articleInfoById->articleSlug}}" type="text">
											<span class="text-danger">{{$errors->has('articleSlug') ? $errors->first('articleSlug') : ''}}</span>
										</div>

										<div class="form-group">
											<label>Article content</label>
											<textarea class="form-control"  name="articleContent" rows="3" id="editor">{{$articleInfoById->articleContent}}</textarea>
											<span class="text-danger">{{$errors->has('articleContent') ? $errors->first('articleContent') : ''}}</span>
										</div>

										<div class="form-group">
											<label class="col-sm-2 control-label">Select category</label>
											<div class="col-md-10">
												<select name="categoryId" class="selectpicker">
													@foreach($categories as $category)
														<option value="{{$category->id}}" {{$category->id == $articleInfoById->categoryId ? 'selected' : ''}}>{{$category->categoryName}}</option>
													@endforeach													
												</select>
											</div>
										</div>


										<div class="form-group">
											<div class="col-md-2">
												<label class="control-label">Image</label>
											</div>


											<div class="col-md-8">
												<input type="file" name="image" accept="image/*" class="btn btn-default" id="exampleInputFile1">
												<p class="help-block">
													Featured image for article here.
												</p>
											</div>

											<div class="col-md-2">
											@if($articleInfoById->image == NULL)
												<img src="{{asset('demoImage')}}/demo.png" style="width: 75px; height: 50px;">
											@else
												<img src="{{asset('featuredImage')}}/{{$articleInfoById->image}}" style="width: 75px;, height: 50px;">
											@endif
											</div>



										</div>										

										<div class="form-group">
											<label class="col-md-2 control-label">Publication status</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" name="publicationStatus" value="1" {{$articleInfoById->publicationStatus == 1 ? 'checked' : ''}}>
														Published </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="publicationStatus" value="0" {{$articleInfoById->publicationStatus == 0 ? 'checked' : ''}}>
														Unpublished </label>
												</div>
											</div>
										</div>


									</fieldset>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<input class="btn btn-primary" type="submit" name="btn" value="Update article">
										</div> 
				                	</div>
								</form>
			  				</div>
			  			</div>

@endsection