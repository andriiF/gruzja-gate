<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller {

    public function index() {
        $is_code = false;
        

        $date = strtotime('25-03-2021 15:00:00');
        $now = strtotime(now());

        if ($now > $date || Auth::user()) {
            $is_code = true;
        }


        return view('welcome')->with([
                    'is_code' => $is_code,
        ]);
    }

}
