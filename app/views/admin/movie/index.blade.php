@extends('admin.layouts.master')

@section('page-title')
	Movies
@endsection

@section('breadcrumb')
	<li>
		<span>Movies</span>
	</li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			@if(Session::has('success'))
				@include('admin.layouts._partials.message')
			@endif
			<!-- BEGIN Portlet PORTLET-->
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-home"></i>
						<span class="caption-subject bold uppercase"> Manage Movies</span>
					</div>
					<div class="actions">
						<a href="{{ route('admin.movie.create') }}" class="btn blue btn-circle btn-outline sbold">
						<i class="fa fa-plus"></i> Add </a>
					</div>
				</div>
				@if(count($movies))
				<div class="portlet-body flip-scroll">
					<table class="table table-striped table-condensed flip-content" id="tableResellers">
						<thead class="flip-content">
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Categories</th>
								<th>Actors</th>
								<th class="text-center">Status</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($movies as $movie)
							<tr>
								<td>{{ $movie->id }}</td>
								<td>{{ $movie->title }}</td>
								<td>category</td>
								<td>actor</td>
								<td class="text-center">
									<form action="{{ route('admin.movie.status', $movie->id) }}" method="POST">
										<input type="hidden" name="_method" value="PUT">
										@if($movie->movie_status == 1)
											<button type="submit" class="btn btn-success btn-xs">Active</button>
										@else	
											<button type="submit" class="btn btn-danger btn-xs">Deactive</button>
										@endif
									</form>
								</td>

								<td class="text-center">
									<form action="{{ route('admin.movie.destroy', $movie->id) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<a href="{{ route('admin.movie.edit', $movie->id) }}"
											class="btn btn-outline btn-circle btn-sm purple">
										<i class="fa fa-edit"></i> Edit </a>
										<button type="submit" class="btn btn-outline btn-circle dark btn-sm red">
										<i class="fa fa-trash-o"></i> Delete
										</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				@else
					<div class="alert alert-danger">No record found.!</div>
					<div class="actions">
						<a href="{{ route('admin.movie.create') }}" class="btn blue btn-circle btn-outline sbold">
						<i class="fa fa-plus"></i> Click to add new movie </a>
					</div>
				@endif
			</div>
			<!-- END Portlet PORTLET-->
		</div>
	</div>
@endsection


@section('footer.scripts')
<script>
	$(window).bind("load", function() {
		window.setTimeout(function() {
			$(".hide-alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove();
			});
		}, 4000);
	});
</script>
@endsection