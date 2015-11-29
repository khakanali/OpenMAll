<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
    protected $table = 'director';
    protected $guarded = ['id'];

    /*starts relations*/

    /*director belongs to merchantbrand table with m:n */
    public function merchants()
    {
        return $this->belongsToMany('App\Models\Merchant','merchantdirector','director_id','merchant_id');
    }
    /*ends relations*/

    public function getMeta()
    {
        return
            $directors =[  "id" =>  null,
                "merchant_id" =>  null,
                "country_id" =>  null,
                "name" =>  null,
                "nric" =>  null,
                "photo_1" =>  null,
                "photo_2" => null,
                "deleted" =>  null,
                "created_at" =>  null,
                "updated_at" =>  null,
                "pivot_merchant_id" =>  null,
                "pivot_director_id" =>  null
            ];
    }
    public function collectDirectorFormData(Request $request , $user_as_merchant_model)
    {
        return  $director_data = [
            'name'=>$request->get('directors'),
            'nric'=>$request->get('nric'),
            'country_id'=>$request->get('dcountry'),
            'photo_1'=>$request->get('directorImages'),
            'merchant_id'=>$user_as_merchant_model['id']
        ];
    }

    public function store(Request $request, $user_as_merchant_model)
    {
        //http://stackoverflow.com/questions/28594076/seed-multiple-rows-at-once-laravel-5
        $Dir_id = Director::orderBy('id', 'desc')->take(1)->get();
        foreach ($Dir_id as $DI) {
            $Did = $DI->id;
        }
        if (!isset($Did)) {
            $Did = 0;
        }
        $Did = $Did + 1;
        $length = count($request->get('directors'));//
        $directors = $this->collectDirectorFormData($request, $user_as_merchant_model); // every key has an arr except merchant_id

        $director = new Director();
        $directorsRecords[] = null;
        $director_model[] = null;
        //lets create a record
        $files = $request->file('directorImages');

        for($i=0;$i<$length;$i++)
        {
            $files_name = $files[$i]->getClientOriginalName();
            $destination = 'public/images/director/' . $Did . '/';
            if ($files[$i]->move($destination, $files_name)) {
                $record = [
                    'name' => $directors['name'][$i],
                    'nric' => $directors['nric'][$i],
                    'country_id' => $directors['country_id'][$i],
                    'photo_1'=> $destination.$files_name,
                    'merchant_id' => $directors['merchant_id']];
                $directorsRecords[] = $record;
                // dd($record);// ["name" => "ds"      ,      "nric" => "23123", "country_id" => "13",  "merchant_id" => 2]
            }
            $Did = $Did +1;
        }

        unset($directorsRecords[0]);// as first record is null  => $directorsRecords[] = null;  so remove it to prevent an extra entry in db

        foreach($directorsRecords as $directorSingleRecord)
        {
             $director_model[] = $director->create($directorSingleRecord);
        }

        unset($director_model[0]);// as first modal is null  =>  $director_model[] = null;  so remove it to prevent an ambiguity for user(developer)

        return $director_model;
    }

}
