<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Http\Request;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'email', 'type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /*relations*/

    /*one user may have many merchants*/
    public function merchant()
    {
        return $this->hasMany('App\Models\Merchant','user_id','id');
    }

    /*user has only one occupation 1:1*/

    public function occupation()
    {
        return $this->belongsTo('App\Models\Occupation','occupation_id','id');
    }
    /*end relations*/

    public function getMeta()
    {
        $userMeta = [
            "id" => null,
            "occupation_id" => null,
            "first_name" => null,
            "last_name" => null,
            "birthdate" => null,
            "mobile_no" => null,
            "email" => null,
            "password" => null,
            "gender" => null,
            "annual_income" => null,
            "salutation" => null,
            "type" => null,
            "deleted" => null,
            "created_at" => null,
            "updated_at" => null,
        ];
        return $userMeta;
    }

    public function collectUserFormData(Request $request)
    {
        return  $user_data = [
//            'id'=>$request->get('id'),
        //        'occupation_id'=>$request->get(''),
                'first_name'=>$request->get('firstname'),
                'last_name'=>$request->get('lastname'),
                'birthdate'=>$request->get('dob'),
                'mobile_no'=>$request->get('mobile'),
                'email'=>$request->get('email'),
                'password'=>$request->get('password'),
                'gender'=>$request->get('gender'),
                'annual_income'=>$request->get('income'),
                'salutation'=>$request->get('salutation'),
                'type'=>$request->get('indication')
            ];
    }


    public function store(Request $request){

        $user_data = $this->collectUserFormData($request);
        $user = new User();

        $user_model = $user->create($user_data);


        return $user_model;
    }
}
