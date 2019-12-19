@extends('admin/master')

@section('content')


  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">All articles list</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Article ID</th>
								<th>Article heading</th>
								<th>Publication status</th>
								<th>Edit/Delete</th>
							</tr>
						</thead>
						<tbody>
						@foreach($articles as $article)
							<tr class="odd gradeX">
									<td>{{$article->id}}</td>
									<td>{{$article->articleHeading}}</td>
									<td>{{$article->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
									
									<td>
		                                 <a class="btn btn-primary" href="{{url('dashboard/article/edit/'.$article->id)}}"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
		                                <a class="btn btn-danger" href="{{url('dashboard/article/delete/'.$article->id)}}" onclick="return checkDeletion();"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                               </td>
							</tr>
						@endforeach
						</tbody>
					</table>
  				</div>
  			</div>


@endsection

