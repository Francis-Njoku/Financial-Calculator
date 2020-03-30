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

class Interest_rate_checkerController extends Controller
{
    public function interest_rate_checker()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '9';
        $post->save();
        return view('financial_factory/interest_rate_checker');
    }

    public function interest_rate_checker_result(Request $request)
    {
        $this->validate($request, [
            'interest' => 'required',
            'loan_amount' => 'required',
            'days' => 'required',
            'days_year' => 'required',
        ]);

        $interest = $request->interest;
        $loan_amount = $request->loan_amount;
        $days = $request->days;
        $days_year = $request->days_year;

        if(is_numeric($interest) == false || is_numeric($loan_amount) == false
            || is_numeric($days) == false || is_numeric($days_year) == false)
        {
            Session::flash('error', 'Please enter the right amount');

            return redirect('/interest_rate_checker');
        }

        $interest_rate = ($interest * $days_year) / ($loan_amount * $days);

        $ip = \Request::ip();
        $data = array(
            'interest' => $interest,
            'loan_amount' => $loan_amount,
            'days' => $days,
            'days_year' => $days_year,
            'interest_rate' => $interest_rate *100,
        );

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '9';
        $post->save();
        return view('financial_factory/interest_rate_checker_result')->with('result', $data);
    }
}
