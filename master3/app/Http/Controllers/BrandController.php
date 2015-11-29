<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$getABrands= Brand::where('name','like','A%')->get();
		$getBBrands= Brand::where('name','like','B%')->get();
		$getCBrands= Brand::where('name','like','C%')->get();
		$getDBrands= Brand::where('name','like','D%')->get();
		$getEBrands= Brand::where('name','like','E%')->get();
		$getFBrands= Brand::where('name','like','F%')->get();
		$getGBrands= Brand::where('name','like','G%')->get();
		$getHBrands= Brand::where('name','like','H%')->get();
		$getIBrands= Brand::where('name','like','I%')->get();
		$getJBrands= Brand::where('name','like','J%')->get();
		$getKBrands= Brand::where('name','like','K%')->get();
		$getLBrands= Brand::where('name','like','L%')->get();
		$getMBrands= Brand::where('name','like','M%')->get();
		$getNBrands= Brand::where('name','like','N%')->get();
		$getOBrands= Brand::where('name','like','O%')->get();
		$getPBrands= Brand::where('name','like','P%')->get();
		$getQBrands= Brand::where('name','like','Q%')->get();
		$getRBrands= Brand::where('name','like','R%')->get();
		$getSBrands= Brand::where('name','like','S%')->get();
		$getTBrands= Brand::where('name','like','T%')->get();
		$getUBrands= Brand::where('name','like','U%')->get();
		$getVBrands= Brand::where('name','like','V%')->get();
		$getWBrands= Brand::where('name','like','W%')->get();
		$getXBrands= Brand::where('name','like','X%')->get();
		$getYBrands= Brand::where('name','like','Y%')->get();
		$getZBrands= Brand::where('name','like','Z%')->get();


		//dd($getAllBrands);

		return view('brandlist')->with(array(
			'allABrands'=>$getABrands,
			'allBBrands'=>$getBBrands,
			'allCBrands'=>$getCBrands,
			'allDBrands'=>$getDBrands,
			'allEBrands'=>$getEBrands,
			'allFBrands'=>$getFBrands,
			'allGBrands'=>$getGBrands,
			'allHBrands'=>$getHBrands,
			'allIBrands'=>$getIBrands,
			'allJBrands'=>$getJBrands,
			'allKBrands'=>$getKBrands,
			'allLBrands'=>$getLBrands,
			'allMBrands'=>$getMBrands,
			'allNBrands'=>$getNBrands,
			'allOBrands'=>$getOBrands,
			'allPBrands'=>$getPBrands,
			'allQBrands'=>$getQBrands,
			'allRBrands'=>$getRBrands,
			'allSBrands'=>$getSBrands,
			'allTBrands'=>$getTBrands,
			'allUBrands'=>$getUBrands,
			'allVBrands'=>$getVBrands,
			'allWBrands'=>$getWBrands,
			'allXBrands'=>$getXBrands,
			'allYBrands'=>$getYBrands,
			'allZBrands'=>$getZBrands,




		));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$brandDetails= Brand::where('id',$id)->with('products')->first();
		return view('brand')->with('brandDetails',$brandDetails);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
