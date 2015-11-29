<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table ="document";


    public function store(Request $request,$user_as_merchant_model)
    {
        $merchant_id = $user_as_merchant_model['id'];
        /*
        * Get product last id from document table
        */
        $Document_id = Document::orderBy('id', 'desc')->take(1)->get();
        foreach ($Document_id as $DI) {
            $Did = $DI->id;
        }
        if (!isset($Did)) {
            $Did = 0;
        }
        $Did = $Did + 1;
        $documents = $request; // every key has an arr except merchant_id

        $files = $request->file('upload_attachment');

        for($i=0;$i<count($files);$i++){
            $files_name = $files[$i]->getClientOriginalName();
            $destination = 'public/images/document/' . $Did . '/';
            if ($files[$i]->move($destination, $files_name)) {
                $doc = new Document();
                $doc->path = $destination.$files_name;
                $doc->save();
                $Merdoc = new merchantdocument();
                $Merdoc->merchant_id = $merchant_id;
                $Merdoc->document_id = $Did;
                $Merdoc->save();
                $Did = $Did + 1;
            }
        }
    }
}


