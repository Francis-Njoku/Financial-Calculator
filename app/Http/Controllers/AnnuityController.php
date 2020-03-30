<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Tax;
use Illuminate\Support\Facades\DB;
use App\Treasury_bill;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\CheckExport;

class AnnuityController extends Controller
{
    public function annuity()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '10';
        $post->save();
        return view('financial_factory/annuity');
    }

    public function periodically_result(Request $request)
    {
        $this->validate($request, [
            'future_value' => 'required',
            'interest_rate' => 'required',
            'period' => 'required',
        ]);

        $future_value = $request->future_value;
        $period = $request->period;
        if(is_numeric($request->interest_rate) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }
        $interest_rate = $request->interest_rate / 100;

        if(is_numeric($future_value) == false || is_numeric($interest_rate) == false
            || is_numeric($period) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }


        $cumulative = (pow((1 + $interest_rate), $period) - 1) / $interest_rate;
        $annuity = $future_value / $cumulative;

        $data = array(
            'future_value' => $future_value,
            'interest_rate' => $request->interest_rate,
            'period' => $period,
            'cumulative' => $cumulative,
            'annuity' => $annuity,
        );
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '10';
        $post->save();
        return view('financial_factory/annuity_periodically_result')->with('result', $data);
    }

    public function period_any_result(Request $request)
    {
        $this->validate($request, [
            'annuity' => 'required',
            'interest_rate' => 'required',
            'period' => 'required',
        ]);

        $annuity = $request->annuity;
        if(is_numeric($request->interest_rate) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }
        $interest_rate = $request->interest_rate / 100;
        $period = $request->period;

        if(is_numeric($annuity) == false || is_numeric($interest_rate) == false
            || is_numeric($period) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }

        $cumulative = (1 - pow((1 + $interest_rate), -$period)) / $interest_rate;
        $future_value = $annuity * $cumulative;

        $data = array(
            'future_value' => $future_value,
            'interest_rate' => $request->interest_rate,
            'period' => $period,
            'cumulative' => $cumulative,
            'annuity' => $annuity,
        );
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '10';
        $post->save();
        return view('financial_factory/annuity_period_any_result')->with('result', $data);
    }

    public function period_infinity_result(Request $request)
    {
        $this->validate($request, [
            'annuity' => 'required',
            'interest_rate' => 'required',
        ]);

        $annuity = $request->annuity;
        if(is_numeric($request->interest_rate) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }
        $interest_rate = $request->interest_rate / 100;

        if(is_numeric($annuity) == false || is_numeric($interest_rate) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }

        $cumulative = 1 / $interest_rate;
        $future_value = $annuity * $cumulative;

        $data = array(
            'future_value' => $future_value,
            'interest_rate' => $request->interest_rate,
            'cumulative' => $cumulative,
            'annuity' => $annuity,
        );
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '10';
        $post->save();
        return view('financial_factory/annuity_period_infinity_result')->with('result', $data);
    }

    public function yperiod_infinity_result(Request $request)
    {
        $this->validate($request, [
            'annuity' => 'required',
            'interest_rate' => 'required',
            'period' => 'required',
        ]);

        $annuity = $request->annuity;
        $period = $request->period;
        if(is_numeric($request->interest_rate) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }
        $interest_rate = $request->interest_rate / 100;

        if(is_numeric($annuity) == false || is_numeric($interest_rate) == false
            || is_numeric($period) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }

        $cumulative = (1 - pow((1 + $interest_rate), -$period)) / $interest_rate;
        $cumulative_infinity = 1 / $interest_rate;
        $cdf = $cumulative_infinity - $cumulative;
        $future_value = $annuity * $cdf;

        $data = array(
            'future_value' => $future_value,
            'interest_rate' => $request->interest_rate,
            'cumulative' => $cumulative,
            'annuity' => $annuity,
            'cumulative_infinity' => $cumulative_infinity,
            'period' => $period,
            'cdf' => $cdf,
        );
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '10';
        $post->save();
        return view('financial_factory/annuity_yperiod_infinity_result')->with('result', $data);
    }

}
