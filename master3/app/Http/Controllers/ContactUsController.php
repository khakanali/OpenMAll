<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repository\ContactUsRepo;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Validator;

class ContactUsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	function __construct(ContactUsRepo $repo) {
		$this->repo = $repo;
	}

	public function index() {
		return view('contact');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ContactUsRequest $request) {
		$input = $request->except("_token");

		$validator = Validator::make($input, [
			'name' => 'required',
			'phone' => 'required|min:0',
			'email' => 'required|email',
		]);

		if ($validator->fails()) {
			return redirect('contactus')
				->withErrors($validator)
				->withInput();
		}
		$this->repo->create($input);
		return redirect('contactus')->with(array('success' => 'Thank you. We Will notify you.'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ContactUsRepo $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
