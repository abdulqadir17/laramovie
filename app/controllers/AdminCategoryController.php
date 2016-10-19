<?php

class AdminCategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.category.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$parentCategories = Category::where('parent_id', 0)->get();
		return View::make('admin.category.create')
			->with('parentCategories', $parentCategories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(),[
			'category_name' => 'required|unique:categories',
			'description' => 'required'
			]);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Category::create([
			'category_name' => Input::get('category_name'),
			'slug' => Str::slug(Input::get('category_name')),
			'description' => Input::get('description'),
			'parent_id' => Input::get('parent_id')
		]);

		return Redirect::to('admin/category');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
}
