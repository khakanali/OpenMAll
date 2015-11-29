<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Buyer extends Model
{
    //
    protected $table = 'buyer';
    protected $guarded = [ 'id'];

    public function collectBuyerFormData(Request $request, $user_model )
    {
        return  $bank_data = [
            'code'=>$user_model['id']
        ];
    }

    public function store(Request $request, $user_model){


        $buyer_data = $this->collectBuyerFormData($request, $user_model);
        $buyer = new Buyer();
        $buyer_model = $buyer->create($buyer_data);

        return $buyer_model;
    }
}
