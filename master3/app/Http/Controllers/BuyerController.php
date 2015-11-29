<?php

namespace App\Http\Controllers;

use App\Models\Occupation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BuyerController extends Controller
{
    public function storeBuyerDetails()
    {
        $data=Input::all();
        dd($data);
    }
    public function getBuyerDetails()
    {
        $getOccupation= Occupation::all();
        return view('buyerinformation')->with(array(
            'getOccupation'=>$getOccupation
        ));
    }
}

