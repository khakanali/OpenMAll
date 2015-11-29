<?php

/*temporary login for writing login*/
use Illuminate\Support\Facades\Auth;

//Auth::loginUsingId(1);

//---------------------------------


 Event::listen('illuminate.query', function($query)
  {
	//echo "<pre>";
	//print_r($query); echo "</pre>";
	Storage::append('q.log', $query);
  });
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', ['as' => 'home', 'uses' => 'Landing@index']);
Route::get('/buyerregistration',['as' => 'buyerregistration', function () {
    return view('buyerregistration');
}]);

Route::get('/owarehouse',  ['as' => 'owarehouse',function () {
    return view('owarehouse');
}]);

Route::get('/SMM',  ['as' => 'SMM',function () {
    return view('SMM');
}]);

Route::get('/productconsumer', ['as' => 'productconsumer', function () {
    return view('productconsumer');
}]);

Route::get('/productsupplier', ['as' => 'productsupplier', function () {
    return view('productsupplier');
}]);

Route::get('/profilesettingcertificate',['as' => 'profilesettingcertificate',  function () {
    return view('profilesettingcertificate');
}]);

Route::get('/profilesettingaboutus', ['as' => 'profilesettingaboutus',  function () {
    return view('profilesettingaboutus');
}]);

Route::get('/profilesetting',['as' => 'profilesetting', 'uses' =>'profilesettingController@index']);

Route::get('/payment', ['as' => 'payment', function () {
    return view('payment');
}]);

Route::get('/album',['as' => 'album',  function () {
    return view('album');
}]);

Route::get('/merchantdashboard', ['as' => 'merchantdashboard', function () {
    return view('merchantdashboard');
}]);

Route::get('/create_new_product', ['as' => 'create_new_product', 'uses' =>  'ProductController@index']);
Route::post('/create_new_product',['as' => 'create_new_product', 'uses' =>  'ProductController@store']);

/*User Routes*/
/****************************************
created by khakan
 *****************************************/
//ajax controller routes
Route::post('/subcategory','AjaxController@subcat');
Route::get('/newdealer','AjaxController@allUser');
Route::post('/state','AjaxController@getState');
Route::post('/city','AjaxController@getCity');

//social media sharing routes
Route::get('/fbshare','smmController@facebook');
Route::get('/profilesetting/callback1','smmController@callback');
Route::get('/test','smmController@test');
// Endpoint that is redirected to after an authentication attempt
Route::get('/callback', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
{
    try {
        $token = $fb
            ->getRedirectLoginHelper()
            ->getAccessToken();
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        // Failed to obtain access token
        dd($e->getMessage());
    }
    $linkData = [
        'link' => 'http://www.example.com',
        'message' => 'User provided message',
    ];

    try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $fb->post('/me/feed', $linkData, $token);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    $graphNode = $response->getGraphNode();
    dd($token);
});
/****************************************
end
*****************************************/
//merchant information

Route::get('/buyerinformation',[ 'as'=>'buyerinformation', 'uses'=>'UserController@buyerInformation']);
Route::get('/create_new_merchant',[ 'as'=>'create-merchant', 'uses'=>'UserController@createMerchant']);
Route::get('/edit_merchant',[ 'as'=>'edit-merchant', 'uses'=>'UserController@getEditMerchant']);
Route::post('/edit_merchant',[ 'as'=>'edit-merchant', 'uses'=>'UserController@postEditMerchant']);
Route::get('/create_new_user',[ 'as'=>'create-new-user', 'uses'=>'UserController@create']);
Route::post('/create_new_user',[ 'as'=>'create-new-user-p', 'uses'=>'UserController@store']);


Route::get('/create_new_voucher', ['as' => 'create_new_voucher', function () {
    return view('create_new_voucher');
}]);


/* Start of OShop routes */

Route::get('oshoplist', 'MerchantController@index');

Route::get('product', 'ProductController@index');

Route::get('oshop/{id}', array(
	'as' => 'oshop.one',
	'uses' => 'MerchantController@oshopone'
));

Route::get('oshopaboutus/{id}', array(
	'as' => 'oshop.aboutus',
	'uses' => 'MerchantController@aboutus'
));

Route::get('oshopcertificate', 'CertificateController@index');


/*
Route::get('/oshopsmsone', ['as' => 'oshopsmsone', function () {
    return view('OShopMsOne');
}]);

Route::get('/oshopsmsoneoem',['as' => 'oshopsmsoneoem',  function () {
    return view('OShopMsOneOEM');
}]);

Route::get('/oshoplist', ['as' => 'oshoplist', function () {
    return view('shops');
}]);

Route::get('/oshopcertificate', ['as' => 'oshopcertificate', function () {
    return view('OShopCertificate');
}]);

Route::get('/oshopaboutus',['as' => 'oshopaboutus',  function () {
    return view('OShopAboutUs');
}]);
 */

/* End of OShop routes */


Route::get('/howtobuy', ['as' => 'howtobuy',  function () {
    return view('how_to_buy');
}]);

Route::get('/howtosell', ['as' => 'howtosell', function () {
    return view('how_to_sell');
}]);

Route::get('/about_us', ['as' => 'about_us', function () {
    return view('about_us');
}]);
Route::get('/buildings', ['as' => 'buildings', function () {
    return view('buildings');
}]);

Route::get('category', ['as' => 'category', 'uses' => 'CategoryController@index']);
Route::get('brand', ['as' => 'brand', 'uses' => 'BrandController@index']);


Route::get('sub-cat-details/{id}/{sid}',['as' => 'sub-cat-details/{id}/{sid}', 'uses' => 'CategoryController@show']);

Route::get('brand-details/{id}',['as' => 'brand-details/{id}', 'uses' =>'BrandController@show']);

Route::get('admin/table-management','AdminController@index');


/*search functionality*/
Route::post('search', ['as' => 'search', 'uses' => 'SearchController@search']);
/*Resource routes*/
Route::resource("downloads", "DownloadAppsController");
Route::resource("newsletter", "NewsLetterController");
Route::resource("advertise", "AdvertisementController");
Route::resource("directory", "DirectoryController");
Route::resource("buyerhelp", "HelpBuyerController");
Route::resource("sellerhelp", "HelpSellerController");
Route::resource("feedback", "FeedbackController");
Route::resource("contactus", "ContactUsController");
Route::resource("job", "JobController");
Route::resource("privacy", "PrivacyController");
Route::resource("terms_cond", "TermsAndCondition");
