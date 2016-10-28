@extends('admin.layouts.master')

@section('header.plugins')
    <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('page-title')
	Movie
@endsection

@section('breadcrumb')
	<li>
		<a href="{{ route('admin.movie.index') }}">Movie</a>
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
					{{ Form::open(['route' => 'admin.movie.store', 'method' => 'POST', ]) }}
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								{{-- @include('admin.layouts._partials.errors') --}}
								<div class="form-body">
									<div class="form-group {{ ($errors->first('category_ids')) ? 'has-error' : null }} ">
										{{ Form::label('Categories', null, ['class' => 'control-label']) }}
										{{ Form::select('category_ids[]', $categories, null, ['multiple' => 'multiple', 'class' => 'form-control select2']) }}
										<span class="help-block">{{ $errors->first('category_ids') }}</span>
									</div>

									<div class="form-group {{ ($errors->first('title')) ? 'has-error' : null }} ">
										{{ Form::label('Title', null, ['class' => 'control-label']) }}
										{{ Form::text('title', null, ['class' => 'form-control']) }}
										<span class="help-block">{{ $errors->first('title') }}</span>
									</div>

									<div class="form-group">
										{{ Form::label('Tag Line', null, ['class' => 'control-label']) }}
										{{ Form::text('tagline', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Description', null, ['class' => 'control-label']) }}
										{{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '8']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Genres', null, ['class' => 'control-label']) }}
										{{ Form::text('genres', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Released Year', null, ['class' => 'control-label']) }}
										{{ Form::text('released_year', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Released Date', null, ['class' => 'control-label']) }}
										{{ Form::text('released_date', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Type', null, ['class' => 'control-label']) }}
										{{-- {{ Form::text('type', null, ['class' => 'form-control']) }} --}}
									</div>

									<div class="form-group">
										{{ Form::label('Runtime', null, ['class' => 'control-label']) }}
										{{ Form::text('runtime', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Votes', null, ['class' => 'control-label']) }}
										{{ Form::text('votes', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Rated', null, ['class' => 'control-label']) }}
										{{ Form::text('rated', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('Poster', null, ['class' => 'control-label']) }}
										{{ Form::text('original_poster', null, ['class' => 'form-control']) }}
									</div>

								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a href="/admin/category" class="btn btn-danger">Cancel</a>
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

@section('footer.plugins')  
  <script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
@endsection

@section('footer.scripts')
<script>
    $(document).ready(function() {
      $(".select2").select2();
    });
</script>
@endsection