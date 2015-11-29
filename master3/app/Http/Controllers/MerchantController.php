<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\MerchantCategory;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MerchantController extends Controller
{
    /**
     * Get the o shops list
     * @return $this
     */
    public function index()
    {
        $merchants = Merchant::orderBy('company_name', 'ASC')->get();
        $firstLetter = '';
        $firstRun = true;

        $letters['AD'] = array('A','B','C','D');
        $letters['EH'] = array('E','F','G','H');
        $letters['IL'] = array('I','J','K','L');
        $letters['MP'] = array('M','N','O','P');
        $letters['QT'] = array('Q','R','S','T');
        $letters['UX'] = array('U','V','W','X');
        $letters['YZ'] = array('Y','Z');

        return view('shops.oshoplist')
            ->with('merchants', $merchants)
            ->with('firstLetter', $firstLetter)
            ->with('firstRun', $firstRun)
            ->with('letters', $letters);
    }

    /**
     * @param Request $request
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function oShopOne(Request $request, $id)
    {
//        $merchant = Merchant::relatedProducts($id);

        //Lazy loading
        $merchant = Merchant::with('products', 'categories')->find($id);

        //dd($merchant->categories->first()->subCatLevel1->first()->description);

        //Check if this merchant exist
        if(!$merchant){
            $request->session()->flash('message', 'Merchant cant be found');
            return redirect()->back();
        }

        //Get the profile settings referring to album for a given merchant
        $profile = Merchant::withProfile($id);

        //dd($profile->signboard->toArray());

        return view('shops.oshop')
            ->with('merchant', $merchant)
            ->with('profile', $profile);
    }

    /**
     * @param Request $request
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function aboutUs(Request $request, $id)
    {
        $merchant = Merchant::find($id);

        $profile = Merchant::withProfile($id);

        if(!$merchant){
            $request->session()->flash('message', 'Cant find these merchant');
            return redirect()->back();
        }

        //dd($merchant->teams);

        return view('shops.oshopaboutus')->with('merchant', $merchant)->with('profile', $profile);
    }
}
