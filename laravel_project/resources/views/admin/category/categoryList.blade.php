@extends('admin/master')

@section('content')


  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">All categories list</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Category ID</th>
								<th>Category name</th>
								<th>Publication status</th>
								<th>Edit/Delete</th>
							</tr>
						</thead>
						<tbody>
						@foreach($categories as $category)
							<tr class="odd gradeX">
									<td>{{$category->id}}</td>
									<td>{{$category->categoryName}}</td>
									<td>{{$category->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
									
									<td>
		                                 <a class="btn btn-primary" href="{{url('dashboard/category/edit/'.$category->id)}}"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
		                                <a class="btn btn-danger" href="{{url('dashboard/category/delete/'.$category->id)}}" onclick="return checkDeletion();"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                               </td>
							</tr>
						@endforeach
						</tbody>
					</table>
  				</div>
  			</div>


@endsection

