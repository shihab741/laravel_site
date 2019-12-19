@extends('admin/master')

@section('content')
	



	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Add category</div>
					        </div>
			  				<div class="panel-body">
			  					<form action="{{ url('dashboard/category/save') }}" method="POST">
			  					{{ csrf_field() }}
									<fieldset>
										<div class="form-group">
											<label>Category name</label>
											<input class="form-control"  name="categoryName" placeholder="Enter category name" type="text">
											<span class="text-danger">{{$errors->has('categoryName') ? $errors->first('categoryName') : ''}}</span>
										</div>

										<div class="form-group">
											<label>Category slug</label>
											<input class="form-control"  name="categorySlug" placeholder="Enter category slug" type="text">
											<span class="text-danger">{{$errors->has('categorySlug') ? $errors->first('categorySlug') : ''}}</span>
										</div>

										<div class="form-group">
											<label>Category description</label>
											<textarea class="form-control"  name="categoryDescription" placeholder="Enter category description here" rows="3"></textarea>
											<span class="text-danger">{{$errors->has('categoryDescription') ? $errors->first('categoryDescription') : ''}}</span>
										</div>



										<div class="form-group">
											<label class="col-md-2 control-label">Publication status</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" name="publicationStatus" value="1" checked="checked">
														Published </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="publicationStatus" value="0">
														Unpublished </label>
												</div>
											</div>
										</div>


									</fieldset>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<input class="btn btn-primary" type="submit" name="btn" value="Save category">
										</div> 
				                	</div>
								</form>
			  				</div>
			  			</div>




@endsection