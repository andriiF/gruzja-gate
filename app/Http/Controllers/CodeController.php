<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;

class CodeController extends Controller {

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code) {
        $code = Code::where('code', $code)->first();
        $can_use = $code && $code->times_used < 4;

        if ($can_use) {
            return view('live');
        } else {
            $error = !$code ? __('messages.wrong_code') : __('messages.limit');
            return view('welcome')->with(['error' => $error]);
        }
    }

    /**
     * Verify & redirect when code entered.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     */
    public function verify(Request $request) {
        $code = Code::where('code', $request->input('code'))->first();
        if ($code && 3 - $code->times_used > 0) {

            $code->times_used += 1;
            $code->save();
            $this->sendRequestToMainPage($code);

            return redirect('/live/' . $code->code);
        } else {
            $error = !$code ? __('messages.wrong_code') : __('messages.limit');
            return view('welcome')->with(['error' => $error]);
        }
    }

    private function sendRequestToMainPage($code) {
        $ch = curl_init(env('MAIN_PAGE_URL') . 'verifyEventCode/' . env('EVENT_ID') . '/' . $code->code);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
    }

}
