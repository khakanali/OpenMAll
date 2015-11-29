<?php

namespace App\Http\Controllers;

use Input;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Socialize;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class smmController extends Controller
{
    public function facebook()
    {
        $fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
        $app_id = env('FACEBOOK_APP_ID');
        $app_secret = env('FACEBOOK_APP_SECRET');
        $app_graph = env('default_graph_version');

        $fb = new Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => $app_graph,
            'default_access_token' => '903539709730443|d46fd1d4d733eda0600f3f29b1d818eb'
        ]);
        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['publish_actions']; // optional
        //$helper->getLoginUrl($params);

        return Redirect::to($helper->getLoginUrl('http://localhost/projects/master3/public/profilesetting/callback',$permissions));
    }

    public function callback()
    {
        $app_id = env('FACEBOOK_APP_ID');
        $app_secret = env('FACEBOOK_APP_SECRET');
        $app_graph = env('default_graph_version');

        $fb = new Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => $app_graph,
            'default_access_token' => '903539709730443|d46fd1d4d733eda0600f3f29b1d818eb'
        ]);
        $helper = $fb->getRedirectLoginHelper();
        $token = $helper->getAccessToken();
        //echo  $token;
    }

        // $user->token;

    public function test(Request $abc)
    {
        return view('test');
        // $user->token;
    }
}
