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

class InflationController extends Controller
{
    public function inflation()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '4';
        $post->save();

        return view('financial_factory/inflation');
    }

    public function inflation_result(Request $request)
    {
        $this->validate($request, [
            'amount_now' => 'required',
            'inflation_rate' => 'required',
            'initial_year' => 'required',
            'year_question' => 'required',
        ]);

        if(is_numeric($request->amount_now) == false || is_numeric($request->inflation_rate) == false || is_numeric($request->initial_year) == false
            || is_numeric($request->year_question) == false)
        {
            Session::flash('error', 'Please enter the right format');

            return redirect('/inflation');
        }

        $amount_now = $request->amount_now;
        if(is_numeric($request->inflation_rate) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/inflation');
        }
        $inflation_rate = $request->inflation_rate / 100;
        $initial_year = $request->initial_year;
        $year_question = $request->year_question;

        if($initial_year > $year_question)
        {
            Session::flash('error', 'Initial year cannot be later than year in question');

            return redirect('/inflation');
        }

        $ip = \Request::ip();

        $number_years = $year_question - $initial_year;
        $amount_then = $amount_now / pow((1 + $inflation_rate), $number_years);
        $amount_future_year = $year_question + $number_years;
        $amount_future = $amount_now * pow((1 + $inflation_rate), $number_years);

        $data = array(
            'amount_now' => $amount_now,
            'inflation_rate' => $request->inflation_rate,
            'initial_year' => $initial_year,
            'year_question' => $year_question,
            'number_years' => $number_years,
            'amount_then' => round($amount_then,2),
            'amount_future_year' => $amount_future_year,
            'amount_future' => round($amount_future, 2)
        );

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '4';
        $post->save();
        return view('financial_factory/inflation_result')->with('result', $data);


    }
}
