@extends('admin.layouts.master')

@section('page-title')
	Persons
@endsection

@section('breadcrumb')
	<li>
		<a href="{{ route('admin.person.index') }}">Person</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<span>Create</span>
	</li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN Portlet PORTLET-->
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-plus"></i>
						<span class="caption-subject bold uppercase"> Add New Movie</span>
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					{{ Form::open(['route' => 'admin.person.store', 'method' => 'POST', 'files' => true ]) }}
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								{{-- @include('admin.layouts._partials.errors') --}}
								<div class="form-body">

									<div class="form-group {{ ($errors->first('person_name')) ? 'has-error' : null }} ">
										{{ Form::label('Person Name', null, ['class' => 'control-label']) }}
										{{ Form::text('person_name', null, ['class' => 'form-control']) }}
										<span class="help-block">{{ $errors->first('person_name') }}</span>
									</div>

									<div class="form-group">
										{{ Form::label('Fullname', null, ['class' => 'control-label']) }}
										{{ Form::text('fullname', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Bio', null, ['class' => 'control-label']) }}
										{{ Form::text('bio', null, ['class' => 'form-control', 'rows' => '8']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Birth Date', null, ['class' => 'control-label']) }}
										{{ Form::text('birth_date', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Birth Place', null, ['class' => 'control-label']) }}
										{{ Form::text('birth_place', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Death Date', null, ['class' => 'control-label']) }}
										{{ Form::text('death_date', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Death Place', null, ['class' => 'control-label']) }}
										{{ Form::text('death_place', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Poster', null, ['class' => 'control-label']) }}
										{{ Form::file('original_poster', null, ['class' => 'form-control']) }}
									</div>

								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a href="{{ route('admin.person.index') }}" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</div>
					{{ Form::close() }}
					<!-- END FORM-->
				</div>
			</div>
			<!-- END Portlet PORTLET-->
		</div>
	</div>
@endsection