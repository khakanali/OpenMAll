<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Facebook\Facebook;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class profilesettingController extends Controller
{
    public function index(){
        $fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
        // Send an array of permissions to request
        $log = $fb->getLoginUrl(['email'],'http://localhost/projects/master3/public/callback');

        return view('profilesetting',compact('log'));
    }
}
