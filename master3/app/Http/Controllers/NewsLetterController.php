<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsLetterRequest;
use App\Http\Repository\NewsLetterRepo;
use App\Http\Controllers\Controller;
use Input;
use Validator;
use View;


class NewsLetterController extends Controller
{
    protected $repo;
    function __construct(NewsLetterRepo $repo) {
        $this->repo = $repo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newsletter');
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
    public function store(NewsLetterRequest $request)
    {

        $input = $request->except("_token");

        $validator = Validator::make($input,[
            'full_name' => 'required',
            'contact_number' => 'required|numeric|min:0',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect('newsletter')
                    ->withErrors($validator)
                    ->withInput();
        }
        $this->repo->create($input);
        return redirect('newsletter')->with(array('success'=>'Record successfully inserted.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
