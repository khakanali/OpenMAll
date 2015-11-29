<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repository\AdvertisementRepo;
use App\Http\Requests\AdvertisementRequest;
use Illuminate\Http\Request;
use Validator;

class AdvertisementController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	protected $repo;
	function __construct(AdvertisementRepo $repo) {
		$this->repo = $repo;
	}

	public function index() {
		return view('advertise');
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
	public function store(AdvertisementRequest $request) {
		$input = $request->except("_token");
		$validator = Validator::make($input, [
			'name' => 'required|min:3',
			'phone' => 'required|min:0',
			'email' => 'required|email',
		]);

		if ($validator->fails()) {
			return redirect('advertise')
				->withErrors($validator)
				->withInput();
		}
		$status = $this->repo->create($input);
		return redirect('advertise')->with('success', "Thank You We Will Contact You.");
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
