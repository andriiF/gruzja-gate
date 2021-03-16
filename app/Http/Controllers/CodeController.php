<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use TCG\Voyager\Facades\Voyager;

class CodeController extends Controller {

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code) {
        $code = Code::where('code', $code)->first();
        $stream_backup = Voyager::setting('site.stream', 0);

        if ($code) {
            return view('live')->with([
                        'stream_backup' => $stream_backup
            ]);
        } else {
            $error = !$code ? __('messages.wrong_code') : __('messages.limit');
            return view('welcome')->with(['error' => $error, 'is_code' => true]);
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

        if ($code) {

            $code->times_used += 1;
            $code->save();
//        $this->sendRequestToMainPage($code);

            return redirect('/live/' . $code->code);
        } else {
            $error = !$code ? __('messages.wrong_code') : __('messages.limit');
            return view('welcome')->with(['error' => $error, 'is_code' => true]);
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
