<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCatLevel1;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAllCategories= Category::with('subCatLevel1')->get();
        //dd($getAllCategories);
        return view('categorylist')->with(array(
            'allCategories'=>$getAllCategories
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
    public function show($id, $sid)
    {
        $catDetails = Category::where('id', $id)->
        with(['products' => function($query) use($sid) {
                $query->where('subcat_id', $sid);
            }])->first();
       /*
        $catDetails = \App\Category::where('id', $id)->
            with('product')->first();
         */

        $subCatDesc = SubCatLevel1::find($sid)->description;

       return view('category', ['subCatDesc'=>$subCatDesc])->with('catDetails', $catDetails);

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
