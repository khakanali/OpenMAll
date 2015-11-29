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
use Validator;
use App\Models\User;
use App\Models\product;
use App\Models\wholesale;
use App\Http\Requests\productRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $brand = Brand::all();
        $category = Category::all();
        $user = User::all();
        return view('product.create_new_product',compact('brand','category','subcat_level1','user'));
    }

    public function store(productRequest $request)
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
                if (isset($request->free_delivery)) {
                    $pro_table->free_delivery = $request->free_delivery;
                    $pro_table->del_worldwide = 0;
                    $pro_table->del_west_malaysia = 0;
                    $pro_table->del_sabah_labuan = 0;
                    $pro_table->del_sarawak = 0;
                } else {
                    $pro_table->free_delivery = 0;
                    $pro_table->del_worldwide = $request->del_worldwid;
                    $pro_table->del_west_malaysia = $request->del_west_malaysia;
                    $pro_table->del_sabah_labuan = $request->del_sabah_labuan;
                    $pro_table->del_sarawak = $request->del_sarawak;
                }

                $pro_table->cov_country_id = $request->cov_country_id;
                $pro_table->cov_state_id = $request->cov_state_id;
                $pro_table->cov_city_id = $request->cov_city_id;
                $pro_table->retail_price = $request->retail_price;
                $pro_table->original_price = $request->original_price;
                $pro_table->available = $request->available;
                $pro_table->owarehouse_moq = $request->owarehouse_moq;
                $pro_table->owarehouse_price = $request->owarehouse_price;
                $pro_table->product_details = $request->product_details;
                $pro_table->type = 'product';

                $pro_table->save();
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
                $merchant_table->User_id = 1;//here we get user id//Auth()::user()->id;
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
