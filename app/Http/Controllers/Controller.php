<?php

namespace App\Http\Controllers;

use App\Models\citizenModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function data(){
        $warga = citizenModel::all();

        return view('landingpage.index' ,compact('warga'));
    }
}
