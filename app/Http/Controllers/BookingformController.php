<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests;

class BookingformController extends Controller
{
    //

    public function index(Request $parm)
    {
        $ymd = $parm->ymd;

        return view('booking-form', [
            'ymd' => $ymd,
        ]);
    }

    public function confirm(Request $request)
    {

        return view('booking-form-confirm', [
            'entry' => $request,
        ]);
    }

    public function thanks(Request $request)
    {
        $work = $request;

        return view('booking-form-thanks');
    }
}
