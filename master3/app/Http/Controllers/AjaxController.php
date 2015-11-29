<?php

namespace App\Http\Controllers;

use App\Models\SubCatLevel1;
use App\Models\User;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function subcat(Request $req){
        $html = '<option value="" selected>Choose Option</option>';
        $category_id = $req->id;
        $subcat_level1 = SubCatLevel1::where('category_id',$category_id)->get();
        foreach($subcat_level1 as $Subcat_level1) {
            $html .= '<option value="' . $Subcat_level1->id . '">' . $Subcat_level1->name . '</option>';
        }
        echo $html;
    }
    public function allUser(){
        $user = user::all();
        $html = '<div class="form-group">
                    <div class="col-sm-11 col-xs-10">
                        <select name="dealer[]" class ="form-control validator">
                            <option value="" selected>Choose Option</option>';
                            foreach($user as $User) {
                                $html .= '<option value="' . $User->id . '">' . $User->first_name . '</option>';
                            }
                        $html .='</select>
                    </div>
                     <div class="col-xs-1 row">
                        <a  href="javascript:void(0);"  class="btn btn-default remwholesale text-danger">
                            <i class="fa fa-minus-circle"></i>
                        </a>
                     </div>
                 </div>';
        echo $html;
    }

    public function getState(Request $req){
		$country = Country::find($req->id);
        $state = state::where('country_code', $country->code)->get();
        $html ='<option value="" selected>Choose Option</option>';
        foreach($state as $states) {
            $html .= '<option value="' . $states->id . '">' . $states->name . '</option>';
        }
        echo $html;
    }
    public function getCity(Request $req){
		$state = State::find($req->id);
        $city = City::where('state_code',$state->code)->get();
        $html ='<option value="" selected>Choose Option</option>';
        foreach($city as $cities) {
            $html .= '<option value="' . $cities->id . '">' . $cities->name . '</option>';
        }
        echo $html;
    }
}
