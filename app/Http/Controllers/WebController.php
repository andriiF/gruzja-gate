<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller {

    public function index() {
            $is_code = false;

        $date = strtotime('29-09-2020 09:45:00');
        $now = strtotime(now());
        
        if($now > $date) {
            $is_code = true;
        }

        
        //todo

        return view('welcome')->with([
            'is_code'=>$is_code 
//            'is_code'=>true
        ]);
    }

}