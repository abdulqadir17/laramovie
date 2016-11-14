<?php

class AdminPersonController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$persons = Person::get();
		return View::make('admin.person.index', compact('persons'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.person.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validaor = Validator::make(Input::all(),[
			'person_name' => 'required' 
		]);

		if($validaor->fails())
		{
			return Redirect::back()->withErrors($validaor)->withInput();
		}
		$filename = null;
		if(Input::hasFile('original_poster'))
		{
			$file = Input::file('original_poster');
			$filename = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
			$file->move('uploads/person/', $filename);
		}

		Person::Create([
			'person_name' => Input::get('person_name'),
			'slug' => Str::slug(Input::get('person_name')),
			'fullname' => Input::get('fullname'),
			'bio' => Input::get('bio'),
			'original_poster' => $filename
		]);
		return Redirect::route('admin.person.index');
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


	/**
	 * Update Specfic Colum the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function status($id)
	{
		echo 'status ' . $id;
	}


}
