@extends('admin.layouts.master')

@section('page-title')
	Persons
@endsection

@section('breadcrumb')
	<li>
		<span>People</span>
	</li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN Portlet PORTLET-->
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-home"></i>
						<span class="caption-subject bold uppercase"> Manage People</span>
					</div>
					<div class="actions">
						<a href="{{ route('admin.person.create') }}" class="btn blue btn-circle btn-outline sbold">
						<i class="fa fa-plus"></i> Add </a>
					</div>
				</div>
				@if(count($persons))
				<div class="portlet-body flip-scroll">
					<table class="table table-striped table-condensed flip-content" id="tableResellers">
						<thead class="flip-content">
							<tr>
								<th>ID</th>
								<th>Person Name</th>
								<th>Fullname</th>
								<th class="text-center">Status</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($persons as $person)
							<tr>
								<td>{{ $person->id }}</td>
								<td>{{ $person->person_name }}</td>
								<td>{{ $person->fullname }}</td>
								<td class="text-center">
									<form action="{{ route('admin.person.status', $person->id) }}" method="POST">
										<input type="hidden" name="_method" value="PUT">
										@if($person->person_status == 1)
											<button type="submit" class="btn btn-success btn-xs">Active</button>
										@else	
											<button type="submit" class="btn btn-danger btn-xs">Deactive</button>
										@endif
									</form>
								</td>

								<td class="text-center">
									<form action="{{ route('admin.person.destroy', $person->id) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<a href="/admin/category/{{ $person->id }}/edit"
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
						<a href="{{ route('admin.person.create') }}" class="btn blue btn-circle btn-outline sbold">
						<i class="fa fa-plus"></i> Click to add new person </a>
					</div>
				@endif
			</div>
			<!-- END Portlet PORTLET-->
		</div>
	</div>
@stop