@extends('admin/master')

@section('content')
	



	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Edit category</div>
					        </div>
			  				<div class="panel-body">
			  					<form action="{{ url('dashboard/category/update') }}" method="POST">
			  					{{ csrf_field() }}
									<fieldset>
										
									<input class="form-control"  name="id" value="{{$categoryInfoById->id}}" type="hidden">

										<div class="form-group">
											<label>Category name</label>
											<input class="form-control"  name="categoryName" value="{{$categoryInfoById->categoryName}}"  type="text">
										</div>

										<div class="form-group">
											<label>Category slug</label>
											<input class="form-control"  name="categorySlug" value="{{$categoryInfoById->categorySlug}}" type="text">
										</div>

										<div class="form-group">
											<label>Category description</label>
											<textarea class="form-control"  name="categoryDescription" rows="3">{{$categoryInfoById->categoryDescription}}</textarea>
										</div>



										<div class="form-group">
											<label class="col-md-2 control-label">Publication status</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" name="publicationStatus" value="1" {{$categoryInfoById->publicationStatus == 1 ? 'checked' : ''}}>
														Published </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="publicationStatus" value="0" {{$categoryInfoById->publicationStatus == 0 ? 'checked' : ''}}>
														Unpublished </label>
												</div>
											</div>
										</div>

									</fieldset>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<input class="btn btn-primary" type="submit" name="btn" value="Update category">
										</div> 
				                	</div>
								</form>
			  				</div>
			  			</div>




@endsection