<?php

namespace App\Http\Repository;

use App\Http\Models\Directory as Directory;

class DirectoryRepo {
	protected $model;

	function __construct(Directory $model) {
		$this->model = $model;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return get all records
	 */
	public function index() {
		$object = $this->model->where("deleted", "0");
		$object = $object->select(
			"directory.company",
			"directory.company",
			"directory.name",
			"directory.occupation_id",
			\DB::raw("CONCAT(directory.phone, ' / ' ,directory.address ,' / ',directory.email ) as custom_address"),
			"occupation.name as occupation_name"
		)
			->Join("occupation", function ($join) {
				$join->on("occupation.id", '=', "directory.occupation_id");
			})
			->orderBy("occupation.name");
		return $object->get();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create($input) {
		return $this->model->create($input);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return data base on id
	 */
	public function find($id) {
		return $this->model->find($id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @return data base on id
	 */
	public function findOrFail($id) {
		return $this->model->findOrFail($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  $input  $id
	 * @return model
	 */
	public function update($input, $id) {
		return $this->model->update($input)->where($id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return true or false
	 */
	public function destroy($id) {
		return $this->model->delete($id);
	}
}
