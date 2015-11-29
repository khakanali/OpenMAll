<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repository\JobRepo;
use App\Http\Requests\JobsRequest;
use Illuminate\Http\Request;
use Validator;

class JobController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	protected $repo;
	function __construct(JobRepo $repo) {
		$this->repo = $repo;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('job_portal');
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
	public function store(JobsRequest $request) {
		$input = $request->except("_token");

		$validator = Validator::make($input, [
			'name' => 'required',
			'phone' => 'required|min:0',
			'email' => 'required|email',
			'position_applied' => 'required',
		]);

		if ($validator->fails()) {
			return redirect('job')
				->withErrors($validator)
				->withInput();
		}
		$this->repo->create($input);
		return redirect('job')->with(array('success' => 'Thank you. We Will notify you.'));}

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
	public function update(Request $request, $id) {
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
