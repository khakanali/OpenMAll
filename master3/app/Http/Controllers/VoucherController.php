<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Merchant;
use App\Models\productdealer;
use App\Models\specification;
use App\Models\SubCatLevel1;
use App\Models\SubCatLevel1Spec;
use App\Models\timeslot;
use App\Models\voucher;
use Validator;
use App\Models\User;
use App\Models\product;
use App\Http\Models\wholesale;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        $category = Category::all();
        $user = User::all();
        return view('product.create_new_voucher',compact('brand','category','subcat_level1','User'));
    }

    public function store(Request $request)
    {
        /*$validation = Validator::make($request->all(), [
            'name' => 'required',
            'O-Shop' => 'required',
            'short_description' => 'required',
            'product_photo' => 'required',
            'retail_price' => 'required',
            'original_price' => 'required',
            'available' => 'required',
            'owarehouse_moq' => 'required',
            'owarehouse_price' => 'required',
            'product_details' => 'required',
        ]);
        if ($validation->fails()) {
            return redirect('create_new_product')
                ->withErrors($validation)
                ->withInput();
        }
        else {*/
        /*
        * Get product last id from product table
       */
        $product_id = Product::orderBy('id', 'desc')->take(1)->get();
        foreach ($product_id as $PI) {
            $Pid = $PI->id;
        }
        if (!isset($Pid)) {
            $Pid = 0;
        }
        $Pid = $Pid + 1;
        /*
         * Product table section
         */
        $destination = 'public/images/product/' . $Pid . '/';
        $image = $request->file('product_photo');
        $image_name = $image->getClientOriginalName();

        if ($image->move($destination, $image_name)) {
            //if image moved
            $pro_table = new Product();
            $pro_table->name = $request->name;
            $pro_table->brand_id = $request->brand_id;
            $pro_table->category_id = $request->category_id;
            $pro_table->subcat_id = $request->subcat_id;
            $pro_table->photo_1 = $destination . $image_name;

            $pro_table->retail_price = $request->retail_price;
            $pro_table->original_price = $request->original_price;
            $pro_table->available = $request->Quantity;
            $pro_table->product_details = $request->product_details;
            $pro_table->type = 'voucher';

            $pro_table->save();

            /*
             * address table
             */
            $address_table = new Address();
            $address_table->city_id = 0;
            $address_table->line1 = $request->VL1;
            $address_table->line2 = $request->VL1;
            $address_table->line3 = $request->VL1;
            $address_table->save();

            /*
            * get last enter adress id
            */
            $address_id = Address::orderBy('id', 'desc')->take(1)->get();
            foreach ($address_id as $AI) {
                $Aid = $AI->id;
            }
            /*
            * Voucher section....voucher table
            */
            //for($i=0;$i<count($request->wholeweek);$i++) {if user chose multi checkboxs
                $voucher_table = new voucher();
                $voucher_table->product_id = $Pid;
                $voucher_table->validity = $request->whole;
                $voucher_table->weekly_duration = $request->wholeweek;
                $voucher_table->start_duration = $request->start_duration;
                $voucher_table->end_duration = $request->years.'-'.$request->months.'-'.$request->days;
                $voucher_table->address_id = $Aid;

                $voucher_table->save();
            //}
            /*
            * get last enter voucher id
            */
            $voucher_id = voucher::orderBy('id', 'desc')->take(1)->get();
            foreach ($voucher_id as $VI) {
                $Vid = $VI->id;
            }
            /*
            * Timealot section....timeslot table
             * timeslot may b many
            */
            for($i=0;$i<count($request->from);$i++){

                $timeslot_table = new timeslot();
                $timeslot_table->voucher_id = Vid;
                $timeslot_table->from = $request->from[$i];
                $timeslot_table->to = $request->to[$i];
                $timeslot_table->price = $request->myrprice[$i];
                $timeslot_table->pax_per_table = $request->fixedprice[$i];

                $timeslot_table->save();
            }

            /*
            * Unit and price section....Wholesaletable
            */
            for ($i = 0; $i < count($request->wunit); $i++) {
                $wholwsale_table = new wholesale();
                $wholwsale_table->product_id = $Pid;
                $wholwsale_table->unit = $request->wunit[$i];
                $wholwsale_table->price = $request->wprice[$i];
                $wholwsale_table->save();
            }
            /*
            * Dealer section with speacial price....productdealer table
            */
            for ($i = 0; $i < count($request->dealer); $i++) {

                $productdealer_table = new productdealer();
                $productdealer_table->product_id = $Pid;
                $productdealer_table->dealer_id = $request->dealer[$i];
                $productdealer_table->special_unit = $request->sunit[$i];
                $productdealer_table->special_price = $request->sprice[$i];
                $productdealer_table->save();
            }
            /*
             * Product Specification section..specification table
             */
            /*
            * get last spec id
            */
            $spec_id = specification::orderBy('id', 'desc')->take(1)->get();
            foreach ($spec_id as $SI) {
                $Sid = $SI->id;
            }
            if (!isset($Sid)) {
                $Sid = 1;
            }
            for ($i = 1; $i <= 6; $i++) {
                $spec_table = new specification();
                $spec_table->name = $request->product_specification_name;
                $spec_table->description = $request->product_specification_[$i];
                $spec_table->save();

                //save into subcat_level_1 table;
                $subcat = new SubCatLevel1Spec();
                $subcat->subcat_level_1_id = $request->category_id;
                $subcat->spec_id = $Sid;
                $subcat->save();

                $Sid = $Sid + 1;
            }

            /*
             * Seller information section..address table
             */
            $address_table = new Address();
            $address_table->city_id = 0;
            $address_table->line1 = $request->SFA1;
            $address_table->line2 = $request->SFA3;
            $address_table->line3 = $request->SFA3;
            $address_table->save();

            /*
            * get last enter adress id
            */
            $address_id = Address::orderBy('id', 'desc')->take(1)->get();
            foreach ($address_id as $AI) {
                $Aid = $AI->id;
            }
            /*
            * O-shop and shot-description section ....merchant table
            */
            $merchant_table = new Merchant();
            $merchant_table->user_id = 1;//here we get user id//Auth()::user()->id;
            $merchant_table->oshop_name = $request->O - Shop;
            $merchant_table->oshop_name = $request->description;
            $merchant_table->oshop_address_id = $Aid;
            $merchant_table->contact_person = $request->seller_name;
            $merchant_table->return_policy = $request->return_policy;

            $merchant_table->save();

            return "Data saved into tables";
        }

        //}
    }
}
