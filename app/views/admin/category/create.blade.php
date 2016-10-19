@extends('admin.layouts.master')

@section('page-title')
    Category
@endsection

@section('breadcrumb')
    <li>
        <a href="/admin/category">Category</a>
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
                      <i class="icon-home"></i>
                      <span class="caption-subject bold uppercase"> Add New Category</span>
                  </div>
              </div>
              <div class="portlet-body form">
                  <!-- BEGIN FORM-->
                  <form action="/admin/category" method="post">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                          {{-- @include('admin.layouts._partials.errors') --}}
                          <div class="form-body">
                            <div class="form-group  {{ $errors->first('category_name') ? 'has-error' : null }} ">
                              <label class="control-label">Category Name</label>
                              <div class="input-icon right">
                                {{ $errors->first('category_name') ? '<i class="fa fa-exclamation tooltips" data-original-title="please write a valid email" data-container="body"></i>' : null }}
                                <input type="text" name="category_name" class="form-control" value="{{ Input::old('category_name') }}"> 
                                @if($errors->first('category_name'))
                                  <span class="help-block">
                                       {{ $errors->first('category_name') }}
                                  </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group  {{ $errors->first('description') ? 'has-error' : null }} ">
                              <label class="control-label">Description</label>
                              <div class="input-icon right">
                                {{ $errors->first('description') ? '<i class="fa fa-exclamation tooltips" data-original-title="please write a valid email" data-container="body"></i>' : null }}
                                <textarea name="description" class="form-control" cols="30" rows="10">{{ Input::old('description') }}</textarea> 
                                @if($errors->first('description'))
                                  <span class="help-block">
                                       {{ $errors->first('description') }}
                                  </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label">Parent Categories</label>
                              <select name="parent_id" class="form-control">
                                <option value="0">-- Select Parent Category --</option>
                                @foreach($parentCategories as $parentCategory)
                                <option value="{{ $parentCategory->id }}">{{ $parentCategory->category_name }}</option>
                                @endforeach
                              </select>
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
                  </form>
                  <!-- END FORM-->
              </div>
          </div>
          <!-- END Portlet PORTLET-->
      </div>
  </div>
@endsection