<?php

namespace App\Http\Controllers;

use App\Kuser;
use App\Wtype;
use Illuminate\Http\Request;

class Week extends Controller
{
    //
    public function add(Request $request){
        $res = new Kuser();
        $obj = $res->login($request);
        return $obj;
    }

}
