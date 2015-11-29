<?php

namespace App\Http\Controllers;

use App\Models\Adslot;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Landing extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pro =new Product();
        $adSlotObj =new Adslot();
        $catObj =new Category();
        $brandObj =new Brand();
        /*getting all products for all slots(currently we have 7 slots)*/
        $adSlot_data = $adSlotObj->with(['products'])->get();/*t1-t7*/
       // dd($adSlot_data[4]['products'][0]);
        $category_temp_data = $catObj->orderBy('created_at')->take(10)->get();/*f1-f10*/
        $brand_data = $brandObj->with(['products'])->get();

        $category_data = [];

        foreach($category_temp_data as $cat_id)
        {
            $cat_latest_product = $pro->where('category_id', '=', $cat_id['id'])->orderBy('created_at')->take(1)->pluck('photo_1');
            $cat_latest_product_id = $pro->where('category_id', '=', $cat_id['id'])->orderBy('created_at')->take(1)->pluck('id');
            $cat_random_product = $pro->where('category_id', '=', $cat_id['id'])->orderBy(DB::raw('RAND()'))->take(6)->get();
            $cat_brands = $pro->with(['brand'])->where('category_id', '=', $cat_id['id'])->take(5)->get();

            $cat_products_random_photos = [];

            foreach($cat_random_product as $photo)
                 $cat_products_random_photos[] = $photo;

            $category_data[] = ['color'=>$cat_id['color'], 'floor'=>$cat_id['floor'], 'name'=>$cat_id['name'], 'desc'=>$cat_id['description'],'logo'=>$cat_id['logo'],
                'latest_photo_id'=>$cat_latest_product_id, 'latest_photo'=>$cat_latest_product,'random_photos'=> $cat_products_random_photos,
                'brands'=>$cat_brands
            ];
        }

        return view('landing_page',compact(['adSlot_data','category_data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
