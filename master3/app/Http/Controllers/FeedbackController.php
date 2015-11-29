<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repository\FeedbackRepo;
use App\Http\Requests\FeedbackRequest;
use Validator;

class FeedbackController extends Controller {
	protected $repo;
	function __construct(FeedbackRepo $repo) {
		$this->repo = $repo;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$position = array("1" => "Merchant", "2" => "SMM", "3" => "Buyer", "4" => "Visitor", "5" => "Dealer");
		view()->share('position', $position);
		return view('feedback');
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
	public function store(FeedbackRequest $request) {
		$input = $request->except("_token");
		$messages = array(
			'role_id.required' => 'The position field is required.',
			'role_id.numeric' => 'The position field is must be a numeric.',
		);
		$validator = Validator::make($input, [
			'name' => 'required',
			'phone' => 'required|numeric|min:0',
			'email' => 'required|email',
			'company_name' => 'required',
			'company_phone' => 'required|numeric',
			'company_email' => 'required|email',
			'company_address' => 'required',
			'role_id' => 'required|numeric|min:0',
		], $messages);

		if ($validator->fails()) {
			return redirect('feedback')
				->withErrors($validator)
				->withInput();
		}
		$this->repo->create($input);
		return redirect('feedback')->with(array('success' => 'Thank you. We Will notify you.'));
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
