<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repository\PrivacyRepo;
use App\Http\Requests\PrivacyRequest;
use Auth;
use Illuminate\Support\Facades\Request;
use Redirect;

class PrivacyController extends Controller {
	protected $repo;
	function __construct(PrivacyRepo $repo) {
		$this->repo = $repo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('privacy');
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
	public function store(PrivacyRequest $request) {
		$user_id = isset(Auth::user()->id) ? Auth::user()->id : 0;
		$ipaddress = Request::getClientIp();
		$input = $request->except("_token");
		if (isset($input['agree']) && ($input['agree'] == "Agree")) {
			$input['agree'] = '1';
			$input['user_id'] = $user_id;
			$input['ipaddress'] = $ipaddress;
			$this->repo->create($input);
			return Redirect::to("/");
		} elseif (isset($input['disagree']) && ($input['disagree'] == "Disagree")) {
			$input['agree'] = '0';
			$input['user_id'] = $user_id;
			$input['ipaddress'] = $ipaddress;
			unset($input['disagree']);
			$this->repo->create($input);
			return Redirect::to("/");
		}
		return Redirect::back()->with("unsuccess", "Woops Something is wrong..!");
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
