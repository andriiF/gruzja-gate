<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;

class CodeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $code = Code::where('code', $code)->first();
        $can_use = $code &&  $code->times_used < 4;

        if($can_use){
            return view('live');
        }else{
            $error = !$code ? 'Wrong code provided.' : "You have exceeded the limit of 3 code uses.";
            return view('welcome')->with(['error' => $error]);
        }
    }

    /**
     * Verify & redirect when code entered.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     */

    public function verify(Request $request)
    {
        $code = Code::where('code', $request->input('code'))->first();
        $can_use = $code && 3 - $code->times_used > 0;

        if($can_use){
            $code->times_used += 1;
            $code->save(); 
            return redirect('/live/' . $code->code);
        }else{
            $error = !$code ? 'Wrong code provided.' : "You have exceeded the limit of 3 code uses.";
            return view('welcome')->with(['error' => $error]);
        }
    }
}
